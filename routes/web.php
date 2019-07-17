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

//----ROTAS DE PRODUTO
Route::get('/listar/produto', 'ProdutoController@listar_produto')->middleware('auth');
Route::get('/cadastrar/produto', 'ProdutoController@view_cadastrar_produto')->middleware('auth');
Route::post('/salvar/produto', 'ProdutoController@cadastrar_produto')->middleware('auth');
Route::get('/editar/produto/{id}', 'ProdutoController@view_editar_produto')->middleware('auth');
Route::post('/atualizar/produto','ProdutoController@editar_produto')->middleware('auth');
Route::get('/remover/produto/{id}', 'ProdutoController@remover_produto')->middleware('auth');
Route::get('/relatorios/produto', function(Request $request) {
    return view('/ProdutoView/relatorio-produto');
})->name('/relatorios/produto');
Route::post('/relatorioCategoria/produto', 'ProdutoController@gerar_relatorio_categoria')->name('/relatorioCategoria/produto');

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
Route::get('/relatorios/pedido', function(Request $request) {
    return view('/PedidoView/relatorio-pedido');
})->name('/relatorios/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_cliente')->name('/relatorioCliente/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_tipo_entrega')->name('/relatorioCliente/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_valor_minimo')->name('/relatorioCliente/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_produto')->name('/relatorioCliente/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_data')->name('/relatorioCliente/pedido');
Route::post('/relatorioCliente/pedido', 'PedidoController@gerar_relatorio_categoria')->name('/relatorioCliente/pedido');


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

//----ROTAS DE FORMA PAGAMENTO
Route::get('/listar/formaPagamento', 'FormaPagamentoController@listar_formaPagamento')->middleware('auth');
Route::get('/cadastrar/formaPagamento', 'FormaPagamentoController@view_cadastrar_formaPagamento')->middleware('auth');
Route::post('/salvar/formaPagamento', 'FormaPagamentoController@cadastrar_formaPagamento')->middleware('auth');
Route::get('/editar/formaPagamento/{id}', 'FormaPagamentoController@view_editar_formaPagamento')->middleware('auth');
Route::post('/atualizar/formaPagamento','FormaPagamentoController@editar_formaPagamento')->middleware('auth');
Route::get('/remover/formaPagamento/{id}', 'FormaPagamentoController@remover_formaPagamento')->middleware('auth');

//----ROTAS DE VENDAS
Route::get('/listar/venda', 'VendaController@listar_venda')->middleware('auth');
Route::get('/relatorio/venda/', function(Request $request) {
    return view('/VendaView/relatorio-venda');
})->name('/relatorio/venda/');
Route::post('/relatorioFormaPagamento/venda', 'VendaController@gerar_relatorio_forma_pagamento')->name('/relatorioFormaPagamento/venda');
Route::post('/relatorioValorMinimo/venda', 'VendaController@gerar_relatorio_valor_minimo')->name('/relatorioValorMinimo/venda');
Route::get('/cadastrar/venda', 'VendaController@view_cadastrar_venda')->middleware('auth');
Route::post('/salvar/venda', 'VendaController@cadastrar_venda')->middleware('auth');
Route::get('/editar/venda/{id}', 'VendaController@view_editar_venda')->middleware('auth');
Route::post('/atualizar/venda','VendaController@editar_venda')->middleware('auth');
Route::get('/remover/venda/{id}', 'VendaController@remover_venda')->middleware('auth');
Route::get('/relatorios/venda', function(Request $request) {
    return view('/VendaView/relatorio-venda');
})->name('/relatorios/venda');
Route::post('/relatorioCliente/venda', 'VendaController@gerar_relatorio_cliente')->name('/relatorioCliente/venda');
Route::post('/relatorioEntrega/venda', 'VendaController@gerar_relatorio_tipo_entrega')->name('/relatorioEntrega/venda');
