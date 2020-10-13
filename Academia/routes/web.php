<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::delete('/planos_detalhe{id}', [App\Http\Controllers\Admin\PlanoController::class, 'deletar'])->name('planos.deletar');
Route::any('/pesquisa', [App\Http\Controllers\Admin\PlanoController::class, 'pesquisa'])->name('planos.pesquisa');

Route::get('/planos_detalhe{id}', [App\Http\Controllers\Admin\PlanoController::class, 'detalhe'])->name('planos.detalhe');
Route::post('/planos', [App\Http\Controllers\Admin\PlanoController::class, 'salvar'])->name('planos.salvar');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/planos', [App\Http\Controllers\Admin\PlanoController::class, 'index'])->name('planos.index');
Route::get('/planos_criar', [App\Http\Controllers\Admin\PlanoController::class, 'criar'])->name('planos.criar');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');
Route::get('/modalidades', [App\Http\Controllers\Admin\ModalidadesController::class, 'index'])->name('modalidades.index');
Route::get('/modalidades_criar', [App\Http\Controllers\Admin\ModalidadeController::class, 'criar'])->name('modalidades.criar');
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

