<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class DadosController extends Controller
{
    function dados_mapa()
    {
        $result = DB::table('endereco')
        ->select('endereco.lat', 'endereco.lng')
        ->join('endereco_usuario','endereco_usuario.id_endereco', 'endereco.id')
        ->join('usuarios','endereco_usuario.id_usuario', 'usuarios.id')
        ->where('usuarios.volutario','SIM')
        ->get();
        return json_encode($result, JSON_NUMERIC_CHECK);
    }
    function dados_mapa_voluntario_cidade(Request $request)
    {

        $result = DB::table('usuarios')
        ->select('endereco.lat', 'endereco.lng')
        ->join('endereco_usuario','endereco_usuario.id_usuario','usuarios.id')
        ->join('endereco','endereco_usuario.id_endereco','endereco.id')
        ->where('usuarios.volutario','SIM')
        ->where('endereco.localidade',$request->localidade)
        ->get();

        
        return json_encode($result, JSON_NUMERIC_CHECK);
    }


    // relatorio de vonlutario
    function relatorio_voluntario($localidade)
    {
        $result = DB::table('usuarios')
        ->select('nome', 'endereco.localidade', 'endereco.uf')
        ->join('endereco_usuario','endereco_usuario.id_usuario','usuarios.id')
        ->join('endereco','endereco_usuario.id_endereco','endereco.id')
        ->where('usuarios.volutario','SIM')
        ->where('endereco.localidade',$localidade)
        ->paginate(50);
        return $result;
    }

    function relatorio_voluntario_num($localidade)
    {
        $result = DB::table('usuarios')
        ->select(DB::raw('COUNT(*) num'))
        ->join('endereco_usuario','endereco_usuario.id_usuario','usuarios.id')
        ->join('endereco','endereco_usuario.id_endereco','endereco.id')
        ->where('usuarios.volutario','SIM')
        ->where('endereco.localidade',$localidade)
        ->get();
        return $result[0]->num;
    }

    // relatorio de vonlutario
    function assistencia_grafico()
    {
        $result = DB::table('assistencia')
        ->select(DB::raw('COUNT(distinct assistencia.id_endereco) num'), 'endereco.uf')
        ->join('endereco','assistencia.id_endereco','endereco.id')
        ->where('assistencia','!=','nao_preciso')
        ->groupBy('endereco.uf')
        ->get();
        return $result;
    }

    function grafico_cidade_dados(Request $request)
    {

        $result = DB::table('endereco')
        ->select(DB::raw('count(*) num'),'assistencia.assistencia as assistencia')
        ->join('assistencia', 'endereco.id', 'assistencia.id_endereco')
        ->where('localidade', Session::get('localidade'))
        ->groupBy('assistencia.assistencia')
        ->get();

        return $result;
    }

    function importancia_dados(Request $request)
    {

        $result = DB::table('usuarios')
        ->select(DB::raw('COUNT(*) num'),'usuarios.opniao_isolamento')
        ->join('endereco_usuario', 'usuarios.id', 'endereco_usuario.id_usuario')
        ->join('endereco', 'endereco_usuario.id_endereco', 'endereco.id')
        ->where('endereco.localidade', Session::get('localidade'))
        ->groupBy('usuarios.opniao_isolamento')
        ->get();


        return $result;
    }
}

// SELECT
// COUNT(CASE tr.grupo_risco WHEN 'idosos' THEN 1 END) idoso,
// COUNT(CASE tr.grupo_risco WHEN 'diabéticos' THEN 1 END) diabeticos,
// COUNT(CASE tr.grupo_risco WHEN 'hipertensão' THEN 1 END) hipertensao,
// COUNT(CASE tr.grupo_risco WHEN 'dpoc' THEN 1 END) dpoc,
// COUNT(CASE tr.grupo_risco WHEN 'asma' THEN 1 END) asma,
// COUNT(CASE tr.grupo_risco WHEN 'rinite' THEN 1 END) rinite,
// COUNT(CASE tr.grupo_risco WHEN 'renal' THEN 1 END) renal,
// COUNT(CASE tr.grupo_risco WHEN 'cardio' THEN 1 END) cardio,

// COUNT(CASE fe.faixa_etaria WHEN 'dez' THEN 1 END) dez,
// COUNT(CASE fe.faixa_etaria WHEN 'vinte' THEN 1 END) vinte,
// COUNT(CASE fe.faixa_etaria WHEN 'trinta' THEN 1 END) trinta,
// COUNT(CASE fe.faixa_etaria WHEN 'quarenta' THEN 1 END) quarenta,
// COUNT(CASE fe.faixa_etaria WHEN 'cinquenta' THEN 1 END) cinquenta,
// COUNT(CASE fe.faixa_etaria WHEN 'sessenta' THEN 1 END) sessenta,
// COUNT(CASE fe.faixa_etaria WHEN 'setenta' THEN 1 END) setenta,
// COUNT(CASE fe.faixa_etaria WHEN 'oitenta' THEN 1 END) oitenta,
// COUNT(CASE fe.faixa_etaria WHEN 'noventa' THEN 1 END) noventa,
// COUNT(CASE fe.faixa_etaria WHEN 'maisnoventa' THEN 1 END) maisnoventa,

// COUNT(CASE fe.faixa_etaria WHEN 'Financeira' THEN 1 END) financeira,
// COUNT(CASE fe.faixa_etaria WHEN 'Alimentícia' THEN 1 END) alimenticia,
// COUNT(CASE fe.faixa_etaria WHEN 'Hospitalar' THEN 1 END) hospitalar

// FROM endereco as e
// INNER JOIN tipo_risco as tr on tr.id_endereco = e.id
// INNER JOIN faixa_etaria as fe on fe.id_endereco = e.id
// INNER JOIN assistencia as a on a.id_endereco = e.id
// GROUP BY tr.grupo_risco, fe.faixa_etaria, a.assistencia
