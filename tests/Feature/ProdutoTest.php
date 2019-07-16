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

class ProdutoTest extends TestCase
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
//    public function testProdutoListarPorCategoria(){
//        $produtoController = new ProdutoController();
//        $request = new Request();
//
//        $categoria = 'leite';
//        $request->merge(['categoria' => $categoria]);
//
//        $produtos = $produtoController->gerar_relatorio_categoria($request);
//        $flag = true;
//        foreach ($produtos as $produto){
//            $produto_categoria = Categoria::find($produto->categoria);
//            if($produto_categoria->nome != $categoria){
//                $flag = false;
//            }
//        }
//
//        $this->assertTrue($flag);
//    }




}