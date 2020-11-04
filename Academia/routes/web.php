<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Rotas para Perfils
Route::resource('profiles', 'App\Http\Controllers\Admin\ProfileController');
Route::get('/profiles_detalhe{id}', [App\Http\Controllers\Admin\ProfileController::class, 'detail'])->name('matriculas.detail');

//Rotas da PAgina Inicial
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
	//Rotas Para Matriculas
	Route::resource('matriculas', 'App\Http\Controllers\Admin\MatriculaController');
	Route::get('/matriculas_detalhe{id}', [App\Http\Controllers\Admin\MatriculaController::class, 'detail'])->name('matriculas.detail');
	Route::any('/matricula_pesquisa', [App\Http\Controllers\Admin\MatriculaController::class, 'search'])->name('matriculas.search');

	//Rotas de Turmas
	Route::post('/turmas', [App\Http\Controllers\Admin\TurmaController::class, 'salvar'])->name('turma.salvar');
	Route::get('/turmas', [App\Http\Controllers\Admin\TurmaController::class, 'index'])->name('turma.index');
	Route::get('/turmas_criar', [App\Http\Controllers\Admin\TurmaController::class, 'criar'])->name('turmas.criar');

	//Rotas de Planos
	Route::delete('/planos_detalhe{id}', [App\Http\Controllers\Admin\PlanoController::class, 'deletar'])->name('planos.deletar');
	Route::any('/pesquisa', [App\Http\Controllers\Admin\PlanoController::class, 'pesquisa'])->name('planos.pesquisa');
	Route::get('/planos_detalhe{id}', [App\Http\Controllers\Admin\PlanoController::class, 'detalhe'])->name('planos.detalhe');
	Route::post('/planos', [App\Http\Controllers\Admin\PlanoController::class, 'salvar'])->name('planos.salvar');
	Route::get('/planos', [App\Http\Controllers\Admin\PlanoController::class, 'index'])->name('planos.index');
	Route::get('/planos_criar', [App\Http\Controllers\Admin\PlanoController::class, 'criar'])->name('planos.criar');

	//Rotas para modalidades
	Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
	Route::get('/modalidade', [App\Http\Controllers\Admin\ModalidadeController::class, 'index'])->name('modalidade.index');
	Route::get('/modalidade_criar', [App\Http\Controllers\Admin\ModalidadeController::class, 'criar'])->name('modalidade.criar');
	Route::get('/modalidade_detalhe{id}', [App\Http\Controllers\Admin\ModalidadeController::class, 'detalhe'])->name('modalidade.detalhe');
	Route::any('/modalidade_pesquisa', [App\Http\Controllers\Admin\ModalidadeController::class, 'pesquisa'])->name('modalidade.pesquisa');
	Route::post('/modalidade', [App\Http\Controllers\Admin\ModalidadeController::class, 'salvar'])->name('modalidade.salvar');

	//Rotas para exame medico (Aptidao fisica)
	Route::get('/aptidaoFisica/index', [App\Http\Controllers\Admin\AptidaoFisicaController::class, 'index'])->name('aptidao.index');
	Route::get('/aptidaoFisica/cadastro', [App\Http\Controllers\Admin\AptidaoFisicaController::class, 'cadastro'])->name('aptidao.cadastro');
	Route::any('/aptidaoFisica/pesquisa', [App\Http\Controllers\Admin\AptidaoFisicaController::class, 'pesquisa'])->name('aptidao.pesquisa');
	Route::post('/aptidaoFisica/cadastro', [App\Http\Controllers\Admin\AptidaoFisicaController::class, 'salvar'])->name('aptidao.salvar');
	Route::delete('/aptidaoFisica/index{id}', [App\Http\Controllers\Admin\AptidaoFisicaController::class, 'deletar'])->name('aptidao.deletar');

	//Rotas para o treino do aluno
	Route::get('/treino/index', [App\Http\Controllers\Admin\TreinoController::class, 'index'])->name('treino.index');
	Route::get('/treino/cadastro', [App\Http\Controllers\Admin\TreinoController::class, 'cadastro'])->name('treino.cadastro');
	Route::any('/treino/pesquisa', [App\Http\Controllers\Admin\TreinoController::class, 'pesquisa'])->name('treino.pesquisa');
	Route::post('/treino/cadastro', [App\Http\Controllers\Admin\TreinoController::class, 'salvar'])->name('treino.salvar');
	Route::delete('/treino/index{id}', [App\Http\Controllers\Admin\TreinoController::class, 'deletar'])->name('treino.deletar');
});

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

