<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    //Rules configuradas diretamente no Validator para melhor validacao de campos unicos
    
  public static $messages = [
      'required' => 'O campo :attribute é obrigatório',
      'min' => 'O campo :attribute deve ter no minimo 2 digitos',
      'max' => 'o campo :attribute deve ter no maximo 100 digitos',
      'cpf.min' => 'O campo cpf deve ter exatamente 11 digitos',
      'cpf.max' => 'O campo cpf deve ter exatamente 11 digitos',
      'unique' => 'Este :attribute já existe',
      'telefone.min' => 'O campo :attribute deve ter no minimo 7 digitos',
      'telefone.max' => 'O campo :attribute deve ter no maximo 20 digitos',
    

  ];
    public function endereco(){
        return $this->hasOne(\App\Endereco::class);
    }


    //
}
