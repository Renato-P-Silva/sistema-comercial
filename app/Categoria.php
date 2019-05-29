<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
      'nome',
  ];
  
  public static $rules = [
        'nome' => 'required',
  ];

  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
  ];
}
