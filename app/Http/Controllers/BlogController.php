<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\CMS;

class BlogController extends Controller
{

    // funções das categoria do blog -----------------------------------

    function lista_categoria_blog(Request $request)
    {
        $result = UsuarioController::verificar_permicao('blog', $request->session()->get('permissao'));
        if ($request->session()->has('usuario') && $result) {

            $lista = DB::table('categoria_blog')->paginate(20);
            return view('config.blog.categoria.lista_blog_categoria', ['lista' => $lista]);
        } else {
            return redirect(route('painel.home'));
        }
    }

    function lista_categoria()
    {
        return DB::table('categoria_blog')->get();
    }

    // funções dos artigos do blog 
    function lista_blog(Request $request)
    {
        try {
            $result = UsuarioController::verificar_permicao('blog', $request->session()->get('permissao'));
            if ($request->session()->has('usuario') && $result) {

                $lista = DB::table('blog')->select('blog.*', 'categoria_blog.nome')->join('categoria_blog', 'categoria_blog.id', 'categoria')->paginate(20);
                return view('config.blog.artigo.lista_blog', ['lista' => $lista]);
            } else {
                return redirect(route('painel.home'));
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    // --------------------------------------------------------------------

    function cadastro_categoria_blog(Request $request)
    {
        try {
            $request->validate([
                'categoria' => 'required',
            ]);

            DB::table('categoria_blog')->insert([
                'nome' => $request->categoria
            ]);

            $result = true;
        } catch (\Throwable $th) {
            $result = false;
        }

        return redirect()->route('blog.categoria', ['result_requerid' => $result]);
    }


    function cadastro_blog(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'data' => 'required',
            'descricao' => 'required',
            'tags' => 'required',
            'imagem' => 'required',
            'detalhes' => 'required',
            'categoria' => 'required'
        ]);
        try {

            $imagem = CMS::upload_imagem($request->imagem);

            $result = DB::table('blog')->insert([
                'titulo' => $request->titulo,
                'data' => $request->data,
                'descricao' => $request->descricao,
                'video' => $request->video,
                'descricao_imagem' => $request->descricao_imagem,
                'tags' => $request->tags,
                'imagem' => $imagem,
                'detalhes' => $request->detalhes,
                'categoria' => $request->categoria
            ]);
        } catch (\Throwable $th) {
            $result = false;
        }
        return redirect()->route('blog.cadastro', ['result_requerid' => $result]);
    }

    // -----------------------------------------------------------------------------


    function editar_categoria(Request $request)
    {

        $result = UsuarioController::verificar_permicao('blog', $request->session()->get('permissao'));
        if ($request->session()->has('usuario') && $result) {

            $result = DB::table('categoria_blog')->where('id', $request->id)->get();
            return view('config.blog.categoria.blog-categoria-editar', ['result' => $result, 'result_requerid' => $request->result_requerid]);
        } else {
            return redirect(route('painel.home'));
        }
    }


    function editar_update(Request $request)
    {
        try {
            $result = DB::update("UPDATE categoria_blog SET nome = '$request->categoria' WHERE id = $request->id");
            $result = true;
        } catch (\Throwable $th) {
            $result = false;
        }
        return redirect()->route('blog.categoria.editar', ['id' => $request->id, 'result_requerid' => $result]);
    }

    //  --------------------------------------------------------------------

    function excluir_categoria(Request $request)
    {
        $result = DB::table('categoria_blog')->where('id', '=', $request->id)->delete();
        if ($result) {
            return redirect(route('blog.categoria.listar'));
        }
    }

    function editar_blog(Request $request)
    {

        try {
            $result = UsuarioController::verificar_permicao('blog', $request->session()->get('permissao'));
            if ($request->session()->has('usuario') && $result) {

                $result = DB::table('blog')->select('blog.*', 'categoria_blog.nome')->join('categoria_blog', 'categoria_blog.id', 'categoria')->get();
                return view('config.blog.artigo.editar_blog', ['result' => $result, 'result_requerid' => $request->result_requerid]);
            } else {
                return redirect(route('painel.home'));
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    function atualizar_blog(Request $request)
    {

        $request->validate([
            'titulo' => 'required',
            'data' => 'required',
            'descricao' => 'required',
            'tags' => 'required',
            'detalhes' => 'required',
            'categoria' => 'required',
        ]);
        try {

            // verifica se foi mandado uma imagem e faz o upload e atualiza a rota no banco 
            if (!empty($request->imagem)) {
                $imagem = CMS::upload_imagem($request->imagem);
                DB::update("UPDATE blog SET imagem = '$imagem' where id = $request->id");
            }

            // atualiza as outras informações
            DB::update("UPDATE blog SET
            titulo = '$request->titulo',
            descricao = '$request->descricao',
            descricao_imagem = '$request->descricao_imagem',
            `data` = '$request->data',
            tags = '$request->tags',
            categoria = '$request->categoria',
            detalhes = '$request->detalhes',
            video = '$request->video' WHERE id = $request->id");

            $result = true;
        } catch (\Throwable $th) {
            $result = false;
        }

        // retorna para a lista de soluções 
        return redirect()->route('editar.blog', ['result_requerid' => $result]);
    }

    function excluir_blog(Request $request)
    {

        try {
            // essa função recebe a localização da imagem e apaga ela
            $caminho = str_replace('storage/', '', $request->imagem);

            // exclui a imagem e retorna um boleano
            $result_delete = Storage::delete($caminho);

            if ($result_delete)
                $result = DB::table('blog')->where('id', $request->id)->delete();

            if ($result)
                return redirect(route('blog.listar'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    // --------------------------------------------------------


    function listar()
    {
        return DB::table('blog')->get();
    }

    function categoria($id)
    {
        return DB::table('categoria_blog')->where('id', $id)->get();
    }

    function categoria_all()
    {
        return DB::table('categoria_blog')->get();
    }

    function tratamento($texto)
    {
        $paragrafos = explode('n/', $texto);

        $texto2 = '';
        foreach ($paragrafos as $value) {
            $texto2 .= "<p>$value</p>";
        }

        $negrito = str_replace('/**', '<b>', $texto2);
        $negrito = str_replace('**/', '</b>', $negrito);

        $italico = str_replace('/i', '<i>', $negrito);
        $italico = str_replace('i/', '</i>', $italico);

        $sublinhado = str_replace('/u', '<u>', $italico);
        $sublinhado = str_replace('u/', '</u>', $sublinhado);

        $tarchado = str_replace('/s', '<s>', $sublinhado);
        $tarchado = str_replace('s/', '</s>', $tarchado);

        return $tarchado;
    }

    function footer()
    {
        return DB::select("SELECT * FROM blog LIMIT 3");
    }
}
