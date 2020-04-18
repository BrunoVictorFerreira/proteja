<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// get
Route::get('/', 'Direcionamento@index')->name('home');
Route::get('/cadastro', 'Direcionamento@cadastro')->name('cadastro');
Route::get('/informacoes', 'Direcionamento@informacoes')->name('informacoes');
Route::get('/pergunta', 'Direcionamento@pergunta')->name('pergunta');
Route::get('/pergunta-2', 'Direcionamento@pergunta2')->name('pergunta2');
Route::get('/pergunta-3', 'Direcionamento@pergunta3')->name('pergunta3');
Route::get('/atualizar', 'Direcionamento@atualizar')->name('atualizar');
Route::get('/mapa', 'Direcionamento@mapa')->name('mapa');
Route::get('/painel', 'Direcionamento@dashboard')->name('painel');
Route::get('/evolucao', 'Direcionamento@evolucao')->name('evolucao');
Route::get('/relatorio', 'Direcionamento@relatorio')->name('relatorio');
Route::get('/error', 'Direcionamento@error')->name('erro');
Route::get('/assistencia', 'Direcionamento@assistencia')->name('assistencia');
Route::get('/atualizar', 'Direcionamento@atualizar')->name('atualizar');

// post
Route::post('/cadastro-usuario', 'PessoaController@cadastro_completo')->name('cadastro.usuario');
Route::post('/cadastro-pergunta', array('as' => 'cadastro.pergunta', 'uses' => 'PessoaController@pergunta_cadastro'));
Route::post('/cadastro-endereco', 'PessoaController@cadastro_endereco')->name('cadastro.endereco');
Route::post('/membro-familiar', array('as' => 'membro.familiar', 'uses' => 'PessoaController@membro_familiar'));
Route::post('/cadastro-assistencia', array('as' => 'cadastro.assistencia', 'uses' => 'PessoaController@assistencia'));

Route::get('/email', 'Email@enviarEmail')->name('email');
Route::get('/relatorio-volutario', 'DadosController@relatorio_volutario')->name('relatorio.volutario');
Route::get('/dados-mapa', 'DadosController@dados_mapa')->name('dados.mapa');
Route::get('/login', 'Direcionamento@login_page')->name('login.page');
Route::post('/login', 'Direcionamento@login')->name('login');
Route::get('/logout', 'Direcionamento@logout')->name('logout');
Route::get('/assistencia_grafico', 'DadosController@assistencia_grafico');
// ->name('cadastro.pergunta')

