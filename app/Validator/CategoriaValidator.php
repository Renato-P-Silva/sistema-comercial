<?php
namespace App\Validator;
use App\Categoria;
class CategoriaValidator{
    public static function validate($dados){
        $validator = \Validator::make($dados, Categoria::$rules, Categoria::$messages);
        if(!$validator->errors()->isEmpty()){
            //throw new ValidationException($validator, $validator->errors());
        }
    }
}