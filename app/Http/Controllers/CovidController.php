<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    function index(){
        return view('covid.cadastro');
    }

    function pos_cadastro(Request $request){
        return view('covid.pos_cadastro',['nome' => $request->nome, 'cpf' => $request->cpf, 'cod' => $request->cod]);
    }
}
