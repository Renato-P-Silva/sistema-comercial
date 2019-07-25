<?php

namespace Tests\Feature;

use App\Categoria;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\produto;
use database\seeds\DatabaseSeeder;
use App\Http\Controllers\ProdutoController;

class PedidoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {

        $this->seed('DatabaseSeeder');
        $this->assertTrue(true);
    }

    // Testes de controller ficam comentados pois eh necessario mudar algumas coisas
    // no controller. Na classe do controller destes testes em cada funcao tera a parte para descomentar
//
//    public function testPedidoListarPorCliente(){
//        $pedidoController = new PedidoController();
//        $request = new Request();
//
//        $cliente = '1';
//        $request->merge(['cliente' => $cliente]);
//
//        $pedidos = $pedidoController->gerar_relatorio_cliente($request);
//        $flag = true;
//        foreach ($pedidos as $pedido){
//            if($pedido->cliente_id == $cliente){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }

//
//    public function testPedidoListarPorProduto(){
//        $pedidoController = new PedidoController();
//        $request = new Request();
//
//        $produto = '1';
//        $request->merge(['produto' => $produto]);
//
//        $pedidos = $pedidoController->gerar_relatorio_produto($request);
//        $flag = true;
//        foreach ($pedidos as $pedido){
//            if($pedido->produto_id == $produto){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }
//    public function testPedidoListarPorCategoria(){
//        $pedidoController = new PedidoController();
//        $request = new Request();
//
//        $categoria = '1';
//        $request->merge(['categoria' => $categoria]);
//
//        $pedidos = $pedidoController->gerar_relatorio_categoria($request);
//        $flag = true;
//        foreach ($pedidos as $pedido){
//            if($pedido->produto->categoria_id == $categoria){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }
}


