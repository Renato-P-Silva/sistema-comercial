<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
      'nome','preco','descricao','custo', 'categoria',
  ];
  
  public static $rules = [
        'nome' => 'required',
        'preco' => 'required|numeric',
        'quantidade' => 'required|numeric',
        'categoria' => 'required',
  ];

  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
      'numeric' => 'O campo :attribute precisa ser numérico.'
  ];
}