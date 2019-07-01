<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
      'nome','preco','descricao','custo', 'categoria',
  ];
  
  public static $rules = [
        'nome' => 'required|min:2|max:100',
        'preco' => 'required|numeric',
        'quantidade' => 'required|numeric',
        'categoria' => 'required',
  ];

  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
      'numeric' => 'O campo :attribute precisa ser numérico.',
      'min' => 'O campo :attribute precisa ter no minimo 2 caracteres',
      'max' => 'O campo :attribute só pode ter no maximo 100 caracteres',
      
  ];
}