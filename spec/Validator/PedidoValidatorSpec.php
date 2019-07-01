<?php


namespace spec\App\Validator;

use App\Validator\ProdutoValidator;
use App\Pedido;
use PhpSpec\ObjectBehavior;
use PhpSpec\Laravel\LaravelObjectBehavior;


class ProdutoValidatorSpec extends LaravelObjectBehavior
{

    function it_o_valor_eh_obrigatorio(){
        $pedido = new Pedido();
        $pedido->produto_id = 1;
        $pedido->cliente_id = 1;
        $pedido->tipoentrega_id = 1;

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($pedido->toArray());

    }

    function it_o_valor_tem_que_ser_numerico(){
        $pedido = new Pedido();
        $pedido->valor = "asdasda";
        $pedido->produto_id = 1;
        $pedido->cliente_id = 1;
        $pedido->tipoentrega_id = 1;

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($pedido->toArray());

    }

    function it_cliente_obrigatorio(){
        $pedido = new Pedido();
        $pedido->valor = 10;
        $pedido->produto_id = 1;
        $pedido->tipoentrega_id = 1;

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($pedido->toArray());

    }

    function it_produto_obrigatorio(){
        $pedido = new Pedido();
        $pedido->valor = 10;
        $pedido->cliente_id = 1;
        $pedido->tipoentrega_id = 1;

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($pedido->toArray());

    }

    function it_tipoentrega_obrigatorio(){
        $pedido = new Pedido();
        $pedido->valor = 10;
        $pedido->cliente_id = 1;
        $pedido->produto_id = 1;

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($pedido->toArray());

    }


}
