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
Route::get('/listar/categoria', 'CategoriaController@listar_categoria')->middleware('auth');
Route::get('/cadastrar/categoria', 'CategoriaController@view_cadastrar_categoria')->middleware('auth');
Route::post('/salvar/categoria', 'CategoriaController@cadastrar_categoria')->middleware('auth');
Route::get('/editar/categoria/{id}', 'CategoriaController@view_editar_categoria')->middleware('auth');
Route::post('/atualizar/categoria','CategoriaController@editar_categoria')->middleware('auth');
Route::get('/remover/categoria/{id}', 'CategoriaController@remover_categoria')->middleware('auth');

//----ROTAS DE CATEGORIA
Route::get('/listar/produto', 'ProdutoController@listar_produto')->middleware('auth');
Route::get('/cadastrar/produto', 'ProdutoController@view_cadastrar_produto')->middleware('auth');
Route::post('/salvar/produto', 'ProdutoController@cadastrar_produto')->middleware('auth');
Route::get('/editar/produto/{id}', 'ProdutoController@view_editar_produto')->middleware('auth');
Route::post('/atualizar/produto','ProdutoController@editar_produto')->middleware('auth');
Route::get('/remover/produto/{id}', 'ProdutoController@remover_produto')->middleware('auth');

//----ROTAS DE CARGO
Route::get('/listar/cargo', 'CargoController@listar_cargo')->middleware('auth');
Route::get('/cadastrar/cargo', 'CargoController@view_cadastrar_cargo');
Route::post('/salvar/cargo', 'CargoController@cadastrar_cargo');
Route::get('/editar/cargo/{id}', 'CargoController@view_editar_cargo')->middleware('auth');
Route::post('/atualizar/cargo','CargoController@editar_cargo')->middleware('auth');
Route::get('/remover/cargo/{id}', 'CargoController@remover_cargo')->middleware('auth');

//----ROTAS DE PEDIDO

Route::get('/listar/pedido', 'PedidoController@listar_pedidos')->middleware('auth');
Route::get('/cadastrar/pedido', 'PedidoController@get_view_cadastrar')->middleware('auth');
Route::post('/salvar/pedido', 'PedidoController@salvar_pedido')->middleware('auth');
Route::get('/remover/pedido/{id}', 'PedidoController@remover_pedido')->middleware('auth');
Route::post('/atualizar/pedido', 'PedidoController@atualizar_pedido')->middleware('auth');
Route::get('/editar/pedido/{id}', 'PedidoController@get_view_atualizar')->middleware('auth');

//ROTAS DE CLIENTE

Route::get('/listar/cliente', 'ClienteController@listar_cliente')->middleware('auth');
Route::get('/cadastrar/cliente', 'ClienteController@view_cadastrar_cliente');
Route::post('/salvar/cliente', 'ClienteController@cadastrar_cliente');
Route::get('/editar/cliente/{id}', 'ClienteController@view_editar_cliente')->middleware('auth');
Route::post('/atualizar/cliente','ClienteController@editar_cliente')->middleware('auth');
Route::get('/remover/cliente/{id}', 'ClienteController@remover_cliente')->middleware('auth');
Route::get('/relatorios/cliente', function(Request $request) {
    return view('/ClienteView/relatorio-cliente');
})->name('/relatorios/cliente');
Route::post('/relatorioCidade/cliente', 'ClienteController@gerar_relatorio_cidade')->name('/relatorioCidade/cliente');
Route::post('/relatorioBairro/cliente', 'ClienteController@gerar_relatorio_bairro')->name('/relatorioBairro/cliente');
