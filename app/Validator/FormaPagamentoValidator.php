<?php
namespace App\Validator;
use App\FormaPagamento;
class FormaPagamentoValidator{
    public static function validate($dados){
        $validator = \Validator::make($dados, FormaPagamento::$rules, FormaPagamento::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}