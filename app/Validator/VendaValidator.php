<?php
namespace App\Validator;
use App\Venda;
class VendaValidator{
    public static function validate($dados){
        $validator = \Validator::make($dados, Venda::$rules, Venda::$messages);
        if(!$validator->errors()->isEmpty()){
            throw new ValidationException($validator, $validator->errors());
        }
    }
}