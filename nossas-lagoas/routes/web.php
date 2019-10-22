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

Route::get('/', function () {
    return view('index');
});

Route::get('/lista-lagoa', function () {
    return view('lista_lagoas');
});

Route::get('/lagoa', function () {
    return view('lagoa');
});

Route::get('/usuario/cadastro', 'UsuarioController@create')->name('usuario.create');
Route::resource('usuario', 'UsuarioController');

Route::resource('postagem', 'PostagemController');
Route::get('/postagem/restaurar/', 'PostagemController@index_trashed')->name('postagem.restaurar');
Route::get('/postagem/restaurar/{id}', 'PostagemController@restore')->name('postagem.restore');
Route::get('/postagem/delete/{id}',  'PostagemController@force_delete')->name('postagem.delete');

Route::resource('comentario', 'ComentarioController');
Route::get('/comentario/restaurar/', 'ComentarioController@index_trashed')->name('comentario.restaurar');
Route::get('/comentario/restaurar/{id}', 'ComentarioController@restore')->name('comentario.restore');
Route::get('/comentario/delete/{id}',  'ComentarioController@force_delete')->name('comentario.delete');
