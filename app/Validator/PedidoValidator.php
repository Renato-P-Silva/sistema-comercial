<?php

namespace App\Validator;

use App\Pedido;

class PedidoValidator
{
    public static function validate($dados)
    {
        $validator = \Validator::make($dados, Pedido::$rules, Pedido::$messages);
        if (!$validator->errors()->isEmpty()) {
            throw new ValidationException($validator, $validator->errors());
        }
    }
}
