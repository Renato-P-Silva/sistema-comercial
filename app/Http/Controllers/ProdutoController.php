<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use Illuminate\Http\Request;
use App\Validator\ValidationException;
use App\Validator\ProdutoValidator;

class ProdutoController extends Controller
{
    public function cadastrar_produto(Request $request){
        try{
            ProdutoValidator::Validate($request->all());
            $produto = new Produto();
            $produto->nome = $request->nome;
            $produto->categoria = $request->categoria;
            $produto->quantidade = $request->quantidade;
            $produto->preco = $request->preco;
            $produto->save();
            return redirect("listar/produto");
        }catch(ValidationException $ex){
            return redirect("cadastrar/produto")->withErrors($ex->getValidator())->withInput();
        }
    }
 public function view_cadastrar_Produto(){
        $categorias = Categoria::all();
        return view('/ProdutoView/cadastrar-produto', ['categorias' => $categorias]);
    }
 public function listar_produto(){
        $produtos = Produto::all();
        return view('/ProdutoView/listar-produto', ['produtos' => $produtos]);
    }
    //retorna a view de editar um produto, tambem retorna o produto que sera editado e todas as secoes disponiveis
    public function view_editar_produto(Request $request){
        $produto = Produto::find($request->id);
        $categorias = Categoria::all();
        return view('/ProdutoView/editar-produto',['produto' =>$produto, 'categorias' => $categorias]);
    }
    public function editar_produto(Request $request){
        try{
            produtoValidator::Validate($request->all());
            $produto = Produto::find($request->id);
            
            $produto->nome = $request->nome;
            $produto->nome = $request->nome;
            $produto->categoria = $request->categoria;
            $produto->quantidade = $request->quantidade;
            $produto->preco = $request->preco;
            $produto->update();
            return redirect("listar/produto");
        }
        catch(ValidationException $ex){
            return redirect("editar/produto")->withErrors($ex->getValidator())->withInput();
        }
    }
    //Faz um softDelete do produto selecionado do Banco de Dados
    public function remover_produto(Request $request){
        $produto = Produto::find($request->id);
        $produto->delete();
        return redirect("listar\produto");
    }
}