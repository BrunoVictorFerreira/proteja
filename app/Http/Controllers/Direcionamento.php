<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('covid.pos_cadastro');
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
            return view('covid.pergunta');
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
            $request->session()->forget(['idEndereco', 'idUsuario']);
            return view('covid.dashboard');
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
        $result = DB::table('usuarios')
        ->join('endereco_usuario')
        ->join()
        ->join();
        return view('covid.atualizar');
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

    function login_page(Request $request)
    {
        if ($request->session()->has('email')) {
            return redirect('painel');
        } else {
            return view('covid.login');
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

            $request->session()->put('nome', $result[0]->nome);
            $request->session()->put('email', $result[0]->email);
            $request->session()->put('localidade', $result[0]->localidade);

            return redirect(route('painel'));
        } catch (\Throwable $th) {

            $request->session()->forget(['nome', 'email']);
            return redirect(route('login', ['result' => true]));
        }
    }

    function logout(Request $request)
    {
        $request->session()->forget(['nome', 'email']);
        return redirect(route('home'));
    }
}
