<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['valor', 'produto_id', 'cliente_id', 'tipoentrega_id', 'data'];
    public static $rules = [
        'valor' => 'required|numeric',
        'produto_id' => 'required',
        'cliente_id' => 'required',
        'tipoentrega_id' => 'required'
    ];
    public static $messages = [
      'required' => 'O campo :attribute eh obrigatorio',
    ];

    public function venda(){
        return $this->hasOne(\App\Venda::class);
    }
}
