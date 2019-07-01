<?php

namespace spec\App\Validator;

use App\Validator\ClienteValidator;
use App\Cliente;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use PhpSpec\Laravel\LaravelObjectBehavior;


class ClienteValidatorSpec extends LaravelObjectBehavior{

    	
    function it_is_initializable()
    {
        Cliente::truncate();

        $this->shouldHaveType(ClienteValidator::class);
    }
    
    function let() {
    	 \Artisan::call("migrate");
    	 //\Artisan::call("db:seed");	
     }
     
    function it_o_nome_do_cliente_eh_obrigatorio(){
        
        $cliente = New Cliente;
        $cliente->nome = "";
        $cliente->cpf = "12345678923";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());
    }

    function it_o_nome_do_cliente_deve_ter_2_caracteres(){
        
        $cliente = New Cliente;
        $cliente->nome = "1";
        $cliente->cpf = "12345678927";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());
    }

     function it_o_nome_do_cliente_deve_ter__menos_de_100_caracteres(){
        
        $cliente = New Cliente;
        $cliente->nome = "asdasjdasjdoiajsdiosaiodjaoisjdoiasdasdkjoiasjdoiadjsoiadjqwepoqwipoaslxççlakdjlçsajdkasjdlkasjdklsajdskljoeiqwueioqdjashdiosahdoiasjlkzxjclkzxjcishadoiqwhoieuqwoieuwqoieuqwoiuodiasjdsajdlksahdsalkdhasoiwqioeuwqoielskahdklashdsadhaslkdhaoiqwueoiwqudasd";
        $cliente->cpf = "12345678928";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());
    }

    function it_cpf_do_cliente_eh_obrigatorio(){
        
        $cliente = New Cliente;
        $cliente->nome = "23qwe";
        $cliente->cpf = "";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());

    } 

    function it_cpf_do_cliente_deve_ter_11_digitos_min(){
        
        $cliente = New Cliente;
        $cliente->nome = "23qwe";
        $cliente->cpf = "123456";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());

    } 


    function it_cpf_do_cliente_deve_ter_11_digitos_max(){
        
        $cliente = New Cliente;
        $cliente->nome = "23qwe";
        $cliente->cpf = "123456123123213";
        $cliente->email = "andreimd@gmail.com";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());

    } 
    
    function it_email_do_cliente_eh_obrigatorio(){
        
        $cliente = New Cliente;
        $cliente->nome = "23qwe";
        $cliente->cpf = "12345678954";
        $cliente->email = "";
        $cliente->telefone = "89121439";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());

    }
 
   function it_telefone_do_cliente_eh_obrigatorio(){
        
        $cliente = New Cliente;
        $cliente->nome = "23qwe";
        $cliente->cpf = "22143214321";
        $cliente->email = "andrei@gmail.com";
        $cliente->telefone = "";
        $cliente->save();

        $this->shouldThrow('App\Validator\ValidationException')->duringValidate($cliente->toArray());

    }


}