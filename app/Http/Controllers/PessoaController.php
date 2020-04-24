<?php

namespace App\Http\Controllers;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PessoaController extends Controller
{
    // vai cadastrar uma pessoa como usurario, o primeiro cadastro
    function cadastro_completo(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório',
        ]);

        // verifico sem existe o cpf
        $result = DB::select("SELECT COUNT(cpf) as num FROM usuarios WHERE cpf = '$request->cpf' or email = '$request->email'");
        if ($result[0]->num < 1) {

            // cadastra o usuario sem a senha
            try {
                $idUsuario = DB::table('usuarios')->insertGetId($request->except('_token', 'senha', 'confirmacao'));
                if (!empty($idUsuario)) {

                    // cadastra a senha o usuario e finaliza o cadastro
                    try {
                        DB::update("UPDATE usuarios SET senha = '" . md5($request->confirmacao) . "' WHERE id = $idUsuario");

                        // cria uma sessão para o usuario 
                        $request->session()->put('idUsuario', $idUsuario);
                        $request->session()->put('nome', $request->nome);
                        $request->session()->put('email', $request->email);

                        // redireciona para o controller de confirmação de cadastro por e-mail
                        return redirect(route('email', [
                            'nome' => $request->nome,
                            'cpf' => $request->cpf,
                            'email' => $request->email,
                            'senha' => $request->senha,
                            'id' => $idUsuario
                        ]));
                    } catch (\Throwable $th) {
                        // se de erro no cadsatro irá apagar a conta do usuario
                        DB::delete("DELETE usuarios WHERE id = $idUsuario");
                        return redirect(route('erro'));
                    }
                }
            } catch (\Throwable $th) {
                // se de erro no cadsatro irá apagar a conta do usuario
                DB::delete("DELETE usuarios WHERE id = $idUsuario");
                return redirect(route('erro'));
            }
        } else {
            return redirect(route('login.page', ['cpf' => true]));
        }
    }

    // cadastrar endereco
    function cadastro_endereco(Request $request)
    {
        // $request->validate([
        //     'nome' => 'required',
        // ]);

        try {

            // atualiza a data de nascimento do usuario 
            DB::update("UPDATE usuarios SET data_nascimento = '$request->data',
            telefone = '$request->telefone' WHERE id = $request->cod");

            // cadastra o endereço 
            $idEndereco = DB::table('endereco')
            ->insertGetId($request->except('_token', 'cod', 'nome', 'cpf', 'data', 'telefone', 'pertense_grupo_risco', 'numero_pessoas', 'grupo_risco', 'faixa_etaria', 'assistência', 'nome_risco', 'cpf_risco'));

            if ($idEndereco > 0) {
                // cadastra o relacionamento de endereco
                $resultfinal = DB::table('endereco_usuario')->insert([
                    'id_endereco' => $idEndereco,
                    'id_usuario' => $request->cod,
                ]);

                if ($resultfinal){

                    // armazena a cidade do usuario 
                    $request->session()->put('localidade', $request->localidade);
                    $request->session()->put('idEndereco', $idEndereco);

                    return redirect(route('pergunta', ['success' => '1']));
                }
            }
        } catch (\Throwable $th) {
            return redirect(route('erro'));
            // return $th->getMessage();
            //throw $th;
        }
    }

    function pergunta_cadastro(Request $request)
    {
        try {
            if($request->pergunta_2 == "" || $request->pergunta_2 == "negativo"){
            // atualiza o sexo do usuario
            DB::update("UPDATE usuarios SET TESTADO = '$request->pergunta_1', RESULTADO_TESTE = '', DATA_TESTE = '', sexo = '$request->pergunta_3' WHERE id = " . $request->session()->get('idUsuario'));
            }else{
            // atualiza o sexo do usuario
            DB::update("UPDATE usuarios SET TESTADO = '$request->pergunta_1', RESULTADO_TESTE = '$request->pergunta_2', DATA_TESTE = '$request->data_exame', sexo = '$request->pergunta_3' WHERE id = " . $request->session()->get('idUsuario'));
            }
            

            // cadastra os grupos de risco da familia do usuario
            if (!empty($request->pergunta_4)) {
                foreach ($request->pergunta_4 as $value) {
                    DB::table('tipo_risco')->insert([
                        'grupo_risco' => "$value",
                        'id_endereco' => $request->session()->get('idEndereco'),
                    ]);
                }
            }

            return redirect(route('pergunta3'));
        } catch (\Throwable $th) {
            return redirect(route('erro'));
        }
    }

    function atualizar_pergunta_cadastro(Request $request){
        
            

            
    }

    function assistencia(Request $request)
    {
        // return response()->json($request->except('_token'));
        try {
            // atualiza a resposta do usuario se ele é um vonlutario
            $updateUsuario = DB::update("
                UPDATE usuarios SET 
                volutario = '$request->voluntario',
                isolamento = '$request->pergunta_6',
                num_pessoas_isolamento = '$request->pergunta_7',
                opniao_isolamento = '$request->opniao',
                grau_satisfacao = '$request->pergunta_10'
                WHERE id = " . $request->session()->get('idUsuario'));

            // cadastra a necessidade do usuario
            if (!empty($request->pergunta_9)) {
                foreach ($request->pergunta_9 as $value) {
                    $assistencia = DB::table('assistencia')->insert([
                        'assistencia' => $value,                     
                        'id_endereco' => $request->session()->get('idEndereco'),
                    ]);
                }
            }

            if($updateUsuario){
                return redirect(route('painel', ['cadastro' => true]));
            }else{
                return back()->with('error' , true);
            }

        } catch (\Throwable $th) {
            return redirect(route('erro', ['erro' => $th->getMessage()]));
            // return $th->getMessage();
        }
    }

    function membro_familiar(Request $request)
    {
                
                // cadastro cada membro da fmailia no grupo de risco 
        if(isset($request->cpf_risco[0])){
            try {
                        // cadastro cada membro da fmailia no grupo de risco     

                for($i = 0; $i < count($request->nome_risco); $i++){
                    $variavel = "pergunta_5".$i;
                    if($i > 0){
                        if($request->nome_risco[$i] == "" || $request->cpf_risco[$i] == "" || $request->$variavel[0] == ""){
                            return redirect(route('pergunta3'));
                        }else{
                        $membros_familia_add = DB::table('membros_familia')
                        ->insert([
                            'nome' => $request->nome_risco[$i],
                            'cpf' => $request->cpf_risco[$i],
                            'faixa_etaria' => $request->$variavel[0],
                            'id_endereco' => Session::get('idEndereco')
                        ]);
                    }
                        
                        
                    }else{
                        $membros_familia = DB::table('membros_familia')
                        ->insert([
                            'nome' => $request->nome_risco[0],
                            'cpf' => $request->cpf_risco[0],
                            'faixa_etaria' => $request->pergunta_5[0],
                            'id_endereco' => Session::get('idEndereco')
                        ]);
                    }
                }
                if($membros_familia && $membros_familia_add){
                    return redirect(route('pergunta3'));
                }else{
                    return back()->with('error' , true);
                }
            } catch (\Throwable $th) {
                return redirect(route('erro'));
            }
        } else {
            return redirect(route('pergunta3'));
        }
                
                
                // return redirect(route('pergunta3'));
            
    }

    function edicao_dependente(Request $request)
    {
                
                // cadastro cada membro da fmailia no grupo de risco 
        if(isset($request->cpf_risco[0])){
            try {
                        // cadastro cada membro da fmailia no grupo de risco     
                        $endereco_usuario = DB::table('endereco_usuario')
                        ->where('id_usuario', Session::get('idUsuario'))
                        ->get();
                        $endereco_id = $endereco_usuario[0]->id_endereco;
                        for($i = 0; $i < count($request->nome_risco); $i++){

                            $delete = DB::table('membros_familia')
                            ->where('id_endereco', $endereco_id)
                            ->delete();
                        }
                for($i = 0; $i < count($request->nome_risco); $i++){
                    $variavel = "pergunta_5".$i;
                    if($i > 0){
                        if($request->nome_risco[$i] == "" || $request->cpf_risco[$i] == "" || $request->$variavel[0] == ""){
                            return redirect(route('painel', ['error_dependentes', "0"]));
                        }else{
                            $membros_familia = DB::table('membros_familia')
                            ->update("UPDATE membros_familia SET
                                nome = '$request->nome_risco[0]',
                                cpf = '$request->cpf_risco[0]',
                                faixa_etaria = '$request->pergunta_5[0]',
                                WHERE id_endereco = '$endereco_id'"
                            );
                        }
                        
                        
                    }else{
                        $membros_familia = DB::table('membros_familia')
                        ->update("UPDATE membros_familia SET
                            nome = '$request->nome_risco[0]',
                            cpf = '$request->cpf_risco[0]',
                            faixa_etaria = '$request->pergunta_5[0]',
                            WHERE id_endereco = '$endereco_id'"
                        );
                    }
                }
                if($membros_familia){
                    return redirect(route('painel', ['error_dependentes', "0"]));
                }else{
                    return redirect(route('painel', ['error_dependentes', "1"]));
                }
            } catch (\Throwable $th) {
                return redirect(route('painel', ['error_dependentes', "1"]));
            }
        } else {
            return redirect(route('painel', ['error_dependentes', "0"]));
        }
                
                
                // return redirect(route('pergunta3'));
            
    }


    function verifica_cpf(Request $request){
        $cpf = DB::table('usuarios')
        ->where("cpf", $request->cpf)
        ->get();

        if(count($cpf) > 0){
            return "sim";
        }else{
            $cpf_membros_familia = DB::table('membros_familia')
            ->where("cpf", $request->cpf)
            ->get();
            if(count($cpf_membros_familia) > 0){
                return "sim";
            }else{
                return "nao";
            }
        }
    }

    public function atualizar_usuario(Request $request){
        $id_usuario = Session::get('idUsuario');
        
        try{
        $usuario = DB::update("UPDATE usuarios SET
            email = '$request->email',
            data_nascimento = '$request->data',
            telefone = '$request->telefone',
            TESTADO = '$request->pergunta_1',
            RESULTADO_TESTE = '$request->pergunta_2',
            DATA_TESTE = '$request->data_exame',
            sexo = '$request->pergunta_3',
            isolamento = '$request->pergunta_6',
            num_pessoas_isolamento = '$request->pergunta_7',
            opniao_isolamento = '$request->opniao',
            grau_satisfacao = '$request->pergunta_10',
            volutario = '$request->voluntario'
            WHERE id =  $id_usuario
        ");

        $endereco_usuario = DB::table('endereco_usuario')
        ->where('id_usuario', Session::get('idUsuario'))
        ->get();

        $endereco_usuario_request = $endereco_usuario[0]->id_endereco;

        
            $endereco = DB::update("UPDATE endereco set
                cep = '$request->cep',
                logradouro = '$request->logradouro',
                uf = '$request->uf',
                localidade = '$request->localidade',
                bairro = '$request->bairro',
                numero = '$request->numero'
                WHERE id = $endereco_usuario_request
            ");
            $endereco_usuario = DB::table('endereco_usuario')
            ->where('id_usuario', Session::get('idUsuario'))
            ->get();

            $endereco = $endereco_usuario[0]->id_endereco;
            // cadastra os grupos de risco da familia do usuario
            if (!empty($request->pergunta_4)) {
                foreach ($request->pergunta_4 as $value) {
                    DB::table('tipo_risco')
                    ->where('id_endereco' , $endereco)
                    ->delete();
                    
                }
                foreach ($request->pergunta_4 as $value) {
                    DB::table('tipo_risco')->insert([
                        'grupo_risco' => "$value",
                        'id_endereco' => $request->session()->get('idEndereco'),
                    ]);
                }
            }else{
                DB::table('tipo_risco')
                    ->where('id_endereco' , $endereco)
                    ->delete();
            }

            if (!empty($request->pergunta_9)) {
                foreach ($request->pergunta_9 as $value) {
                    DB::table('assistencia')
                    ->where('id_endereco' , $endereco)
                    ->delete();
                }
                foreach ($request->pergunta_9 as $value) {
                    $assistencia = DB::table('assistencia')->insert([
                        'assistencia' => $value,                     
                        'id_endereco' => $request->session()->get('idEndereco')
                    ]);
                }
            }
            
            $request->session()->put('email', $request->email);
            // $request->session()->put('nome', $request->nome);
            $request->session()->put('localidade', $request->localidade);

            return redirect()->route('painel', ['error'=> '0']);
        }catch(\Throwable $th){
            return redirect()->route('painel', ['error'=> '1']);
        }
        
            


    }

    function alterar_senha(Request $request){
        $idUsuario = Session::get('idUsuario');
        $senhaa = md5($request->senha_nova);
        $senha_antiga = DB::table("usuarios")
        ->where('id', $idUsuario)
        ->get();
        if($senha_antiga[0]->senha === md5($request->senha_antiga)){
            $senha = DB::update("UPDATE usuarios SET
                senha = '$senhaa'
                WHERE id = '$idUsuario'
            ");
            $email = Session::get('email');
            $nome = Session::get('nome');
            $nomeTratado = explode(" ", $nome);

            // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            //Server settings
                                 // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'www.fianto.com.br';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'contato@fianto.com.br';                     // SMTP username
            $mail->Password   = '%4c9SE#cL%Nk';                               // SMTP password
            $mail->SMTPSecure = 'PHPMailer::ENCRYPTION_STARTTLS';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587; 
            $mail->CharSet = 'utf-8';
            // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('contato@fianto.com.br', 'Fianto');
            $mail->addAddress(''.$email.'', 'Cliente');             // Name is optional
            $mail->addReplyTo('contato@fianto.com.br', 'Fianto');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Alteração de senha | Proteja';
            $mail->Body    = '
            <html style="width:100%;font-family:Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
            <head> 
             <meta charset="UTF-8"> 
             <meta content="width=device-width, initial-scale=1" name="viewport"> 
             <meta name="x-apple-disable-message-reformatting"> 
             <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
             <meta content="telephone=no" name="format-detection"> 
             <title>Fianto - Email</title> 
             <!--[if (mso 16)]>
               <style type="text/css">
               a {text-decoration: none;}
               </style>
               <![endif]--> 
             <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
             <style type="text/css">
           @media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:block!important } a.es-button { font-size:20px!important; display:block!important; border-width:10px 20px 10px 20px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
           #outlook a {
               padding:0;
           }
           .ExternalClass {
               width:100%;
           }
           .ExternalClass,
           .ExternalClass p,
           .ExternalClass span,
           .ExternalClass font,
           .ExternalClass td,
           .ExternalClass div {
               line-height:100%;
           }
           .es-button {
               mso-style-priority:100!important;
               text-decoration:none!important;
           }
           a[x-apple-data-detectors] {
               color:inherit!important;
               text-decoration:none!important;
               font-size:inherit!important;
               font-family:inherit!important;
               font-weight:inherit!important;
               line-height:inherit!important;
           }
           .es-desk-hidden {
               display:none;
               float:left;
               overflow:hidden;
               width:0;
               max-height:0;
               line-height:0;
               mso-hide:all;
           }
           </style> 
            </head> 
            <body style="width:100%;font-family:Arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
             <div class="es-wrapper-color" style="background-color:#f8f8f8;"> 
              <!--[if gte mso 9]>
                       <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
                           <v:fill type="tile" color="#555555"></v:fill>
                       </v:background>
                   <![endif]--> 
              <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
                <tr style="border-collapse:collapse;"> 
                 <td valign="top" style="padding:0;Margin:0;"> 
                   
                  <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
                    <tr style="border-collapse:collapse;"> 
                     <td align="center" style="padding:0;Margin:0;"> 
                      <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F8F8F8;"> 
                        
                        <tr style="border-collapse:collapse;"> 
                         <td style="Margin:0;padding-top:20px;padding-bottom:20px;padding-left:20px;padding-right:20px;background-color:#F8F8F8;" bgcolor="#F8F8F8" align="left"> 
                          <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                            <tr style="border-collapse:collapse;"> 
                             <td width="560" valign="top" align="center" style="padding:0;Margin:0;"> 
                              <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="padding:0;Margin:0;padding-top:15px;padding-bottom:15px;"> 
                                  <div> 
                                    <img src="https://www.fianto.com.br/proteja/img/Fianto_vertical_positiva.png" alt="" style="max-width: 150px;margin-bottom: 20px;">
                                     <h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Arial, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#168b7d;"><span style="font-size:30px;"><strong>Olá, '.$nomeTratado[0].'!</strong></span><br></h2> 
                                  </div></td> 
                                </tr> 
                                <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="padding:0;Margin:0;padding-left:10px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#242424;">Você acaba de alterar sua senha com sucesso.<br></p></td> 
                                 </tr> 
                                 
                                
                              </table></td> 
                            </tr> 
                          </table></td> 
                        </tr> 

                        <tr style="border-collapse:collapse"> 
                         <td style="Margin:0;padding-top:10px;padding-bottom:10px;padding-left:10px;padding-right:10px;background-color:#f8f8f8;" bgcolor="#f8f8f8" align="left"> 
                          <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                            <tr style="border-collapse:collapse;"> 
                             <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> 
                              <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                              <tr style="border-collapse:collapse"> 
                              <td align="center" style="padding:0;Margin:0;padding-left:10px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#242424;">Se você não fez essa operação, por favor entre em contato com a gente, através dos nossos canais de atendimento.<br></p></td> 
                              </tr>
                                <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="padding:0;Margin:0;padding-bottom:15px;"> 
                                   
                                   
                                   
                                     <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px;">
                                   <span class="es-button-border" style="padding: 10px;border-style:solid;border-color:#2CB543;background-image:linear-gradient(45deg, rgb(0, 139, 136), rgb(198, 145, 41));border-width:0px;display:inline-block;border-radius:20px;width:auto;">
                                     <a href="https://www.fianto.com.br/proteja/login" class="es-button" target="_blank" style="color: white">Abrir seu perfil</a>
                                   </span>
                                 </td> 
                                </tr> 
                                   </table>
                                   </td>
                                </tr> 
                              </table></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                        
                        <tr style="border-collapse:collapse;"> 
                         <td style="Margin:0;padding-left:20px;padding-right:20px;padding-top:25px;padding-bottom:30px;background-color:#F8F8F8;" bgcolor="#f8f8f8" align="center"> 
                          <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0"><tr><td width="100%" valign="top"><![endif]--> 
                          <table class="es-left" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;text-align:center;"> 
                            <tr style="border-collapse:collapse;"> 
                             <td class="es-m-p20b" width="100%" align="center" style="padding:0;Margin:0;"> 
                              <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="margin-top: 100px;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                <tr style="border-collapse:collapse; text-align:center"> 
                                  <h3 align="center" style="text-size: 25px;color: darkgray"><a href="https://www.fianto.com.br/fale-conosco">Envie-nos um email</a> ou <a href="https://www.fianto.com.br">acesse nosso site</a></h3>
        

                                </tr> 
                                
                              </table></td> 
                            </tr> 
                          </table> 
                        </td>
                        </tr>
                </tr> 
              </table> 
             </div>  
            </body>
           </html>';
            $mail->AltBody = 'Cadastro de dados Fianto Realizado Com Sucesso!';

            $mail->send();

            // redireciona a consulta
            return redirect()->route('alterar_senha', ['success'=> '1']);
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return redirect()->route('alterar_senha', ['success'=> '0']);
        }

            
        }else{
            return redirect()->route('alterar_senha', ['success'=> '0']);
        }
        
        
    }


}

