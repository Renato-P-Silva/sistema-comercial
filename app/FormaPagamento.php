<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormaPagamento extends Model
{
    protected $fillable = [
      'nome', 'descricao',
  ];
  
  public static $rules = [
        'nome' => 'required|min:2|max:100',
        'descricao' => 'required|min:2|max:100',
  ];

  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
      'numeric' => 'O campo :attribute precisa ser numérico.',
      'min' => 'O campo :attribute precisa ter no minimo 2 caracteres',
      'max' => 'O campo :attribute só pode ter no maximo 100 caracteres',
      
  ];
}
