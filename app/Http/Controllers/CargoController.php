<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function __construct () {
  }

    public function listarCargos(){
      $cargos = \App\Cargo::all();
  }
