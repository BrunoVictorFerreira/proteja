<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PessoaController extends Controller
{
    // vai cadastrar uma pessoa como usurario, o primeiro cadastro
    function cadastro_completo(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'confirmacao' => 'required'
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

                    return redirect(route('pergunta'));
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
            // atualiza o sexo do usuario
            DB::update("UPDATE usuarios SET sexo = '$request->pergunta_1_1' WHERE id = " . $request->session()->get('idUsuario'));

            // cadastra os grupos de risco da familia do usuario
            if (!empty($request->pergunta_2)) {
                foreach ($request->pergunta_2 as $value) {
                    DB::table('tipo_risco')->insert([
                        'grupo_risco' => "$value",
                        'id_endereco' => $request->session()->get('idEndereco'),
                    ]);
                }
            }

            return redirect(route('pergunta2'));
        } catch (\Throwable $th) {
            return redirect(route('erro'));
        }
    }

    function assistencia(Request $request)
    {
        // return response()->json($request->except('_token'));
        try {
            // atualiza a resposta do usuario se ele é um vonlutario
            DB::update("UPDATE usuarios SET volutario = '$request->valuntario' WHERE id = " . $request->session()->get('idUsuario'));

            // cadastra a necessidade do usuario
            if (!empty($request->pergunta_5)) {
                foreach ($request->pergunta_5 as $value) {
                    DB::table('assistencia')->insert([
                        'assistencia' => $value,
                        'id_endereco' => $request->session()->get('idEndereco'),
                    ]);
                }
            }

            return redirect(route('painel', ['cadastro' => true]));
        } catch (\Throwable $th) {
            return redirect(route('erro', ['erro' => $th->getMessage()]));
            // return $th->getMessage();
        }
    }

    function membro_familiar(Request $request)
    {
        if(isset($request->cpf_risco[0])){
            try {
                // cadastro cada membro da fmailia no grupo de risco 
                $i = 0;
                foreach ($request->nome_risco as $value) {
                    DB::table('membros_familia')
                        ->insert([
                            'nome' => $value,
                            'cpf' => $request->cpf_risco[$i],
                            'faixa_etaria' => $request->pergunta_3[$i],
                            'id_endereco' => $request->session()->get('idEndereco')
                        ]);
                    $i++;
                }
                return redirect(route('pergunta3'));
            } catch (\Throwable $th) {
                return redirect(route('erro'));
            }
        } else {
            return redirect(route('pergunta3'));
        }
    }
}
