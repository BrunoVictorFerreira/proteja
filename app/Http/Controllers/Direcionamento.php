<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Direcionamento extends Controller
{
    function index(Request $request)
    {
        return view('covid.bem_vindo');
    }
    function cadastro()
    {
        return view('covid.cadastro');
    }

    function informacoes(Request $request)
    {
        
        // faz uma consulta do usuario (não sei pq esta aqui)
        $result = DB::table('usuarios')->where(['id' => Session::get('idUsuario')])->get();
        return view('covid.pos_cadastro', compact("result"));
    }

    function mapa(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.mapa');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }

    function pergunta(Request $request)
    {
        if ($request->session()->has('email')) {
            $sucesso = $request->success;
            return view('covid.pergunta', compact("sucesso"));
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }
    function painel_importancia(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.painel_importancia');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }
    function painel_visao_auxilio(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.painel_visao_auxilio');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }
    function painel_visao_voluntarios_mapa(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.painel_visao_voluntarios_mapa');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }

    function pergunta2(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.pergunta_2');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }

    function pergunta3(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.pergunta_3');
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }
    function dashboard(Request $request)
    {
        if ($request->session()->has('email')) {
            $status = $request->atualizado;
            $dependentes = $request->error_dependentes;
            if($status != ""){
                return view('covid.dashboard', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
            }elseif($dependentes != ""){
                return view('covid.dashboard', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
            }else{
                return view('covid.dashboard');
            }
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }
    function evolucao(Request $request)
    {
        return view('covid.evolucao');
    }
    function atualizar(Request $request)
    {
        $usuario = DB::table("usuarios")
        ->where('id', Session::get('idUsuario'))
        ->get();

        $endereco = DB::table('endereco')
        ->select('endereco.cep as cep', 'endereco.logradouro as logradouro', 'endereco.numero as numero', 'endereco.id as endereco_id',
        'endereco.bairro as bairro', 'endereco.localidade as localidade', 'endereco.uf as uf',
        'endereco.lat as lat', 'endereco.lng as lng', 'endereco_usuario.id_usuario as id_usuario', 'endereco_usuario.id_endereco as id_endereco')
        ->join('endereco_usuario', 'endereco.id', 'endereco_usuario.id_endereco')
        ->where('endereco_usuario.id_usuario', Session::get('idUsuario'))
        ->get();

        $endereco_usuario = DB::table('endereco_usuario')
        ->where('id_usuario', Session::get('idUsuario'))
        ->get();

        $tipo_risco = DB::table('tipo_risco')
        ->where('id_endereco', $endereco_usuario[0]->id_endereco)
        ->get();

        $assistencia = DB::table('assistencia')
        ->where('id_endereco', $endereco_usuario[0]->id_endereco)
        ->get();


        return view('covid.atualizar', compact('usuario' , 'endereco', 'tipo_risco', 'assistencia'));
    }

    function error(Request $request)
    {
        return view('covid.Erro');
    }
    function assistencia(Request $request)
    {
        if ($request->session()->has('email')) {
            return view('covid.assistencia', ['nome' => $request->session()->get('nome')]);
        } else {
            return redirect(route('login.page', ['nome' => $request->session()->get('nome')]));
        }
    }

    function relatorio(Request $request)
    {

        if ($request->session()->has('email')) {
            return view('covid.relatorio', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
        } else {
            return redirect(route('login.page'));
        }
    }

    function mapa_voluntario(Request $request)
    {

        if ($request->session()->has('email')) {
            return view('covid.mapa_voluntario', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
        } else {
            return redirect(route('login.page'));
        }
    }

    function grafico_cidade(Request $request){
        if ($request->session()->has('email')) {
            return view('covid.grafico_cidade', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
        } else {
            return redirect(route('login.page'));
        }
    }

    function importancia_grafico(Request $request){
        if ($request->session()->has('email')) {
            return view('covid.importancia_grafico', ['nome' => $request->session()->get('nome'), 'localidade' => $request->session()->get('localidade')]);
        } else {
            return redirect(route('login.page'));
        }
    }

    function login_page(Request $request)
    {
        if ($request->session()->has('email')) {
            return redirect('painel');
        } else {
            return view('covid.login');
        }
    }

    function login_page_prefeitura(Request $request)
    {
        if ($request->session()->has('email_prefeitura')) {
            return redirect('painel');
        } else {
            return view('covid.login_prefeitura');
        }
    }


    // funcão de login 
    function login(Request $request)
    {
        try {
            $result = DB::table('usuarios')
                ->join('endereco_usuario', 'endereco_usuario.id_usuario', 'usuarios.id')
                ->join('endereco', 'endereco_usuario.id_endereco', 'endereco.id')
                ->where('usuarios.email', $request->email)
                ->where('usuarios.senha', md5($request->senha))
                ->get();
            $request->session()->put('idUsuario', $result[0]->id_usuario);
            $request->session()->put('nome', $result[0]->nome);
            $request->session()->put('email', $result[0]->email);
            $request->session()->put('localidade', $result[0]->localidade);
            $request->session()->put('idEndereco', $result[0]->id);

            return redirect(route('painel'));
        } catch (\Throwable $th) {

            $request->session()->forget(['nome', 'email']);
            return redirect(route('login', ['result' => true]));
        }
    }

    function edicao_dependentes(Request $request){
        $endereco_usuario = DB::table('endereco_usuario')
        ->where('id_usuario', Session::get('idUsuario'))
        ->get();
        $dependente = DB::table('membros_familia')
        ->where('id_endereco', $endereco_usuario[0]->id_endereco)
        ->get();
        $quantidade = count($dependente);
        return view('covid.edicao_dependentes', compact('dependente', 'quantidade'));
    }

    function alterar_senha(Request $request){
        if(isset($request->success)){
        $success = $request->success;
        return view("covid.alterar_senha", compact('success'));
        }else{
        return view("covid.alterar_senha");

        }
    }

    function logout(Request $request)
    {
        $request->session()->forget(['nome', 'email', 'idUsuario', 'localidade']);
        $request->session()->flush();
        return redirect(route('home'));
    }
}
