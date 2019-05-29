<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Validator\CategoriaValidator;

class CategoriaController extends Controller
{
    public function cadastrar_categoria(Request $request){
        try{
            CategoriaValidator::Validate($request->all());
            $categoria = new Categoria();
            $categoria->nome = $request->nome;
            $categoria->save();
            return redirect("listar/categoria");
        }
        catch(ValidationException $ex){
            return redirect("cadastrar/categoria")->withErrors($ex->getValidator())->withInput();
        }
    }
 public function view_cadastrar_categoria(){
        return view('/CategoriaView/cadastrar-categoria');
    }
 public function listar_categoria(){
        $categorias = Categoria::all();
        return view('/CategoriaView/listar-categoria', ['categorias' => $categorias]);
    }
    //retorna a view de editar um Categoria, tambem retorna o Categoria que sera editado e todas as secoes disponiveis
    public function view_editar_categoria(Request $request){
        $categoria = Categoria::find($request->id);
        return view('/CategoriaView/editar-categoria',['categoria' =>$categoria]);
    }
    public function editar_categoria(Request $request){
        try{
            categoriaValidator::Validate($request->all());
            $categoria = Categoria::find($request->id);
            
            $categoria->nome = $request->nome;
            $categoria->update();
            return redirect("listar/categoria");
        }
        catch(ValidationException $ex){
            return redirect("editar/categoria")->withErrors($ex->getValidator())->withInput();
        }
    }
    //Faz um softDelete do Categoria selecionado do Banco de Dados
    public function remover_categoria(Request $request){
        $categoria = Categoria::find($request->id);
        $categoria->delete();
        return redirect("listar\categoria");
    }
}
