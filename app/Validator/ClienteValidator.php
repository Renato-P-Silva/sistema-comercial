<?php
namespace App\Validator;
use App\Cliente;
class ClienteValidator{
    public static function validate($dados){
        $validator = \Validator::make($dados, 
        [
        'nome' => 'required|min:2|max:100',
        'cpf' => 'required|unique:clientes,cpf,'.$dados['id'].'|min:11|max:11',
        'email' => 'required|unique:clientes,email,'.$dados['id'],
        'telefone' => 'required|min:7|max:20',
        ],
         Cliente::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}