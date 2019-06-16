<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validator\CategoriaValidator;
use App\Cargo;


class CargoController extends Controller
{
    public function __construct () {
  }

  public function cadastrar_cargo(Request $request){
      try{
          CategoriaValidator::Validate($request->all());
          $cargo = new Cargo();
          $cargo->nome = $request->nome;
          $cargo->save();
          return redirect("listar/cargo");
      }
      catch(ValidationException $ex){
          return redirect("cadastrar/cargo")->withErrors($ex->getValidator())->withInput();
      }
  }
public function view_cadastrar_cargo(){
      return view('/CargoView/cadastrar-cargo');
  }
public function listar_cargo(){
      $cargos = Cargo::all();
      return view('/CargoView/listar-cargo', ['cargos' => $cargos]);
  }
  public function view_editar_cargo(Request $request){
      $cargo = Cargo::find($request->id);
      return view('/CargoView/editar-cargo',['cargo' =>$cargo]);
  }
  public function editar_cargo(Request $request){
      try{
          cargoValidator::Validate($request->all());
          $cargo = Cargo::find($request->id);

          $cargo->nome = $request->nome;
          $cargo->update();
          return redirect("listar/cargo");
      }
      catch(ValidationException $ex){
          return redirect("editar/cargo")->withErrors($ex->getValidator())->withInput();
      }
  }
  public function remover_cargo(Request $request){
      $cargo = Cargo::find($request->id);
      $cargo->delete();
      return redirect("listar\cargo");
  }
}
