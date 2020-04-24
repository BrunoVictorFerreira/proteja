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
Route::fallback(function(){
    return redirect()->route('login');
});

// get
Route::get('/', 'Direcionamento@index')->name('home');
Route::get('/cadastro', 'Direcionamento@cadastro')->name('cadastro');
Route::get('/informacoes', 'Direcionamento@informacoes')->name('informacoes');
Route::get('/pergunta', 'Direcionamento@pergunta')->name('pergunta');
Route::get('/pergunta-2', 'Direcionamento@pergunta2')->name('pergunta2');
Route::get('/edicao-dependentes', 'Direcionamento@edicao_dependentes')->name('edicao_dependentes');
Route::get('/pergunta-3', 'Direcionamento@pergunta3')->name('pergunta3');
Route::get('/atualizar', 'Direcionamento@atualizar')->name('atualizar');
Route::get('/mapa', 'Direcionamento@mapa')->name('mapa');
Route::get('/painel', 'Direcionamento@dashboard')->name('painel');
Route::get('/evolucao', 'Direcionamento@evolucao')->name('evolucao');
Route::get('/relatorio', 'Direcionamento@relatorio')->name('relatorio');
Route::get('/error', 'Direcionamento@error')->name('erro');
Route::get('/assistencia', 'Direcionamento@assistencia')->name('assistencia');
Route::get('/atualizar', 'Direcionamento@atualizar')->name('atualizar');
Route::get('/alterar-senha', 'Direcionamento@alterar_senha')->name('alterar_senha');
Route::get('/mapa-voluntario', 'Direcionamento@mapa_voluntario')->name('mapa_voluntario');
Route::get('/grafico-cidade', 'Direcionamento@grafico_cidade')->name('grafico_cidade');
Route::get('/importancia-grafico', 'Direcionamento@importancia_grafico')->name('importancia-grafico');
Route::get('/painel-importancia', 'Direcionamento@painel_importancia')->name('painel-importancia');
Route::get('/painel-visao-auxilio', 'Direcionamento@painel_visao_auxilio')->name('painel-visao-auxilio');
Route::get('/painel-visao-voluntarios-mapa', 'Direcionamento@painel_visao_voluntarios_mapa')->name('painel-visao-voluntarios-mapa');

// post
Route::post('/cadastro-usuario', 'PessoaController@cadastro_completo')->name('cadastro.usuario');
Route::post('/cadastro-pergunta', array('as' => 'cadastro.pergunta', 'uses' => 'PessoaController@pergunta_cadastro'));
Route::post('/cadastro-endereco', 'PessoaController@cadastro_endereco')->name('cadastro.endereco');
Route::post('/membro-familiar', array('as' => 'membro.familiar', 'uses' => 'PessoaController@membro_familiar'));
Route::post('/dependentes', array('as' => 'edicao_dependente', 'uses' => 'PessoaController@edicao_dependente'));
Route::post('/cadastro-assistencia', array('as' => 'cadastro.assistencia', 'uses' => 'PessoaController@assistencia'));
Route::post('/verifica-cpf', 'PessoaController@verifica_cpf')->name('verifica_cpf');
Route::post('/atualizar-usuario', 'PessoaController@atualizar_usuario')->name('atualizar_usuario');
Route::post('/alterar-senha', 'PessoaController@alterar_senha')->name('alterar_senhaa');

Route::get('/email', 'Email@enviarEmail')->name('email');
Route::get('/relatorio-volutario', 'DadosController@relatorio_volutario')->name('relatorio.volutario');
Route::get('/dados-mapa', 'DadosController@dados_mapa')->name('dados.mapa');
Route::get('/dados-mapa-voluntario-cidade', 'DadosController@dados_mapa_voluntario_cidade')->name('dados.mapa-voluntario-cidade');
Route::get('/login', 'Direcionamento@login_page')->name('login.page');
Route::get('/login-prefeitura', 'Direcionamento@login_page_prefeitura')->name('login.page.prefeitura');
Route::post('/login', 'Direcionamento@login')->name('login');
Route::get('/logout', 'Direcionamento@logout')->name('logout');
Route::get('/assistencia_grafico', 'DadosController@assistencia_grafico');
Route::get('/grafico-cidade-dados', 'DadosController@grafico_cidade_dados');
Route::get('/importancia-dados', 'DadosController@importancia_dados');
// ->name('cadastro.pergunta')

