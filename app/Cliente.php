<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

  public static $rules = [
        'nome' => 'required',
  ];
  
  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
  ];
    public function endereco(){
        return $this->hasOne(\App\Endereco::class);
    }


    //
}
