<?php

namespace spec\App\Validator;

use App\Validator\ProdutoValidator;
use App\Produto;
use App\Categoria;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Laravel\LaravelObjectBehavior;


class ProdutoValidatorSpec extends LaravelObjectBehavior{

    	
    function it_is_initializable()
    {
        Produto::truncate();
        Categoria::truncate();
        $categoria = new Categoria();
        $categoria->nome = "teste";
        $categoria->save();
        $this->shouldHaveType(ProdutoValidator::class);

    }
    
    function let() {
    	 \Artisan::call("migrate");
    	 //\Artisan::call("db:seed");	
     }
     
    function it_o_nome_do_produto_eh_obrigatorio(){
        
        $produto = New Produto;
        $produto->nome = "";
        $produto->preco = "123";
        $produto->quantidade = "12";
        $produto->categoria = "1";
        $produto->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($produto->toArray());
    }
   
    function it_o_nome_do_produto_deve_ter_2_caracteres(){
        
        $produto = New Produto;
        $produto->nome = "1";
        $produto->preco = "123";
        $produto->quantidade = "12";
        $produto->categoria = "1";
        $produto->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($produto->toArray());
    }

     function it_o_nome_do_produto_deve_ter__menos_de_100_caracteres(){
        
        $produto = New Produto;
        $produto->nome = "asdasjdasjdoiajsdiosaiodjaoisjdoiasdasdkjoiasjdoiadjsoiadjqwepoqwipoaslxççlakdjlçsajdkasjdlkasjdklsajdskljoeiqwueioqdjashdiosahdoiasjlkzxjclkzxjcishadoiqwhoieuqwoieuwqoieuqwoiuodiasjdsajdlksahdsalkdhasoiwqioeuwqoielskahdklashdsadhaslkdhaoiqwueoiwqudasd";
        $produto->preco = "123";
        $produto->quantidade = "12";
        $produto->categoria = "1";
        $produto->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($produto->toArray());
    }
    
    
    function it_quantidade_do_produto_eh_obrigatorio(){
        
        $produto = New Produto;
        $produto->nome = "item2";
        $produto->preco = "123";
        $produto->quantidade = "";
        $produto->categoria = "1";
        $produto->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($produto->toArray());

    }

}