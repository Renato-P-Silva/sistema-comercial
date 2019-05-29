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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//----ROTAS DE CATEGORIA   
Route::get('/listar/categoria', 'CategoriaController@listar_categoria');
Route::get('/cadastrar/categoria', 'CategoriaController@view_cadastrar_categoria');
Route::post('/salvar/categoria', 'CategoriaController@cadastrar_categoria');
Route::get('/editar/categoria/{id}', 'CategoriaController@view_editar_categoria');
Route::post('/atualizar/categoria','CategoriaController@editar_categoria');
Route::get('/remover/categoria/{id}', 'CategoriaController@remover_categoria');
