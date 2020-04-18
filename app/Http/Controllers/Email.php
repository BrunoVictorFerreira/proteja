<?php


namespace App\Http\Controllers;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Email extends Controller
{
    public function enviarEmail(Request $request){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $nome = $request->nome;
            $nomeTratado = explode(" ", $nome);
            $cpf = $request->cpf;
            $email = $request->email;
            $senha = $request->senha;

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
            $mail->addAddress(''.$email.'', ''.$nome.'');             // Name is optional
            $mail->addReplyTo('contato@fianto.com.br', 'Fianto');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Cadastro de Dados | Proteja';
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
                                     <h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Arial, sans-serif;font-size:24px;font-style:normal;font-weight:normal;color:#168b7d;"><span style="font-size:30px;"><strong>Bem-vindo ao Proteja, '.$nomeTratado[0].'!</strong></span><br></h2> 
                                  </div></td> 
                                </tr> 
                                <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="padding:0;Margin:0;padding-left:10px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:Arial, sans-serif;line-height:21px;color:#242424;">Seu cadastro foi realizado com sucesso.<br></p></td> 
                                </tr> 
                                
                              </table></td> 
                            </tr> 
                          </table></td> 
                        </tr> 
                        <tr style="border-collapse:collapse;"> 
                         <td style="Margin:0;padding-bottom:10px;padding-left:10px;padding-right:10px;padding-top:15px;background-color:#F8F8F8;" bgcolor="#f8f8f8" align="left"> 
                           <table width="100%" cellspacing="0" cellpadding="0" style="background-color: #148b7e;mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                             <tr style="border-collapse:collapse;"> 
                               <td width="580" valign="top" align="center" style="padding:0;Margin:0;"> 
                                 <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                   <tr style="border-collapse:collapse;"> 
                                     <td align="center" style="padding:0;Margin:0;"><h2 style="Margin:0;line-height:29px;mso-line-height-rule:exactly;font-family:Arial, sans-serif;font-size:20px;font-style:normal;font-weight:normal;color:white;">Detalhes<br></h2></td> 
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
                                
                                <tr style="border-collapse:collapse;"> 
                                 <td align="center" style="padding:0;Margin:0;padding-bottom:15px;"> 
                                   <table class="cke_show_border" width="100%" height="70" cellspacing="1" cellpadding="1" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                     <tr style="border-collapse:collapse"> 
                                      <td style="padding:0;Margin:0;text-align:center;font-family:Arial, sans-serif;font-size:14px;color: #148b7e"><strong>Nome</strong></td> 
                                      
                                     </tr>
                                     <tr>
                                      <td style="padding:0;Margin: 0;text-align:center;color: darkslategray">'.$nome.'</td> 
                                     </tr> 
                                     
                                   </table>
                                   <table class="cke_show_border" width="100%" height="70" cellspacing="1" cellpadding="1" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                     <tr style="border-collapse:collapse"> 
                                      <td style="padding:0;Margin:0;text-align:center;font-family:Arial, sans-serif;font-size:14px;color: #148b7e"><strong>CPF</strong></td> 
                                      
                                     </tr>
                                     <tr>
                                      <td style="padding:0;Margin: 0;text-align:center;color: darkslategray">'.$request->cpf.'</td> 
                                     </tr> 
                                     
                                   </table>
                                   <table class="cke_show_border" width="100%" height="70" cellspacing="1" cellpadding="1" border="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
                                     <tr style="border-collapse:collapse"> 
                                      <td style="padding:0;Margin:0;text-align:center;font-family:Arial, sans-serif;font-size:14px;color: #148b7e"><strong>Email</strong></td> 
                                      
                                     </tr>
                                     <tr>
                                      <td style="padding:0;Margin: 0;text-align:center;color: darkslategray">'.$email.'</td> 
                                     </tr> 
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

            // faz uma consulta do usuario (não sei pq esta aqui)
            $result = DB::table('usuarios')->where(['id' => $request->id])->get();

            // redireciona a consulta
            return redirect(route('informacoes',['nome' => $request->nome, 'cpf' => $request->cpf, 'cod' => $request->id, 'email' => $request->email, 'telefone' => $request->telefone]));
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return redirect()->route('home');
        }
    }
}
