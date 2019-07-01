<?php
namespace App\Validator;
use App\Produto;
class ProdutoValidator{
    public static function validate($dados){
        $validator = \Validator::make($dados, Produto::$rules, Produto::$messages);
        if(!$validator->errors()->isEmpty()){
            //throw new ValidationException($validator, $validator->errors());
        }
    }
}