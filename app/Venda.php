<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['pedido_id', 'formapagamento_id', 'data_venda', 'data_pagamento'];

    public static $rules = [
        'pedido_id' => 'required|numeric',
        'formapagamento_id' => 'required',
        'data_venda' => 'required',
        'data_pagamento' => 'required'
    ];
    public static $messages = [
        'required' => 'O campo :attribute eh obrigatorio',
    ];}
