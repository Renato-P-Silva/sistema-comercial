<?php

namespace App\Http\Controllers;

use App\FormaPagamento;
use App\Categoria;
use Illuminate\Http\Request;
use App\Validator\ValidationException;
use App\Validator\FormaPagamentoValidator;

class FormaPagamentoController extends Controller
{
    public function cadastrar_formaPagamento(Request $request){
        try{
            FormaPagamentoValidator::Validate($request->all());
            $formaPagamento = new FormaPagamento();
            $formaPagamento->nome = $request->nome;
            $formaPagamento->descricao = $request->descricao;
            $formaPagamento->save();
            return redirect("listar/formaPagamento");
        }catch(ValidationException $ex){
            return redirect("cadastrar/formaPagamento")->withErrors($ex->getValidator())->withInput();
        }
    }
 public function view_cadastrar_FormaPagamento(){
        return view('/FormaPagamentoView/cadastrar-formaPagamento');
    }
 public function listar_formaPagamento(){
        $formaPagamentos = FormaPagamento::all();
        return view('/FormaPagamentoView/listar-formaPagamento', ['formaPagamentos' => $formaPagamentos]);
    }
    //retorna a view de editar um formaPagamento, tambem retorna o formaPagamento que sera editado e todas as secoes disponiveis
    public function view_editar_formaPagamento(Request $request){
        $formaPagamento = FormaPagamento::find($request->id);
        return view('/FormaPagamentoView/editar-formaPagamento',['formaPagamento' =>$formaPagamento]);
    }
    public function editar_formaPagamento(Request $request){
        try{
            FormaPagamentoValidator::Validate($request->all());
            $formaPagamento = FormaPagamento::find($request->id);
            
            $formaPagamento->nome = $request->nome;
            $formaPagamento->descricao = $request->descricao;
            $formaPagamento->update();
            return redirect("listar/formaPagamento");
        }
        catch(ValidationException $ex){
            return redirect("editar/formaPagamento")->withErrors($ex->getValidator())->withInput();
        }
    }
    //Faz um softDelete do formaPagamento selecionado do Banco de Dados
    public function remover_formaPagamento(Request $request){
        $formaPagamento = FormaPagamento::find($request->id);
        $formaPagamento->delete();
        return redirect("listar\formaPagamento");
    }
}
