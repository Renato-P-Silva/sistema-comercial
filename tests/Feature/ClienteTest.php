<?php

namespace Tests\Feature;

use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\cliente;
use database\seeds\DatabaseSeeder;
use App\Http\Controllers\ClienteController;

class ClienteTest extends TestCase
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

//    public function testClienteListarPorCidade(){
//        $clienteController = new ClienteController();
//        $request = new Request();
//
//        $cidade = 'garanhuns';
//        $request->merge(['cidade' => $cidade]);
//
//        $clientes = $clienteController->gerar_relatorio_cidade($request);
//
//        $flag = true;
//        foreach ($clientes as $cliente){
//            if($cliente->endereco->cidade != $cidade){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }
//
//    public function testClienteListarPorbairro(){
//        $clienteController = new ClienteController();
//        $request = new Request();
//
//        $bairro = 'boa vista';
//        $request->merge(['bairro' => $bairro]);
//
//        $clientes = $clienteController->gerar_relatorio_bairro($request);
//
//        $flag = true;
//        foreach ($clientes as $cliente){
//            if($cliente->endereco->bairro != $bairro){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }


}