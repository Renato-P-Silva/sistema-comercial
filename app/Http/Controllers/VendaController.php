<?php

namespace App\Http\Controllers;

use App\FormaPagamento;
use App\Validator\VendaValidator;
use App\Pedido;
use App\Venda;
use App\Cliente;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function cadastrar_venda(Request $request){
        try{
            VendaValidator::Validate($request->all());
            $venda = new Venda();
            $venda->pedido_id = $request->pedido_id;
            $venda->formapagamento_id = $request->formapagamento_id;
            $venda->data_venda = $request->data_venda;
            $venda->data_pagamento = $request->data_pagamento;
            $venda->save();
            return redirect("listar/venda");
        }catch(ValidationException $ex){
            return redirect("cadastrar/venda")->withErrors($ex->getValidator())->withInput();
        }
    }
    public function view_cadastrar_Venda(){
        $pedidos = Pedido::all();

        $formapagamentos = FormaPagamento::all();
        return view('/VendaView/cadastrar-venda', ['pedidos' => $pedidos, 'formapagamentos' => $formapagamentos]);
    }

    public function listar_venda(){
        $vendas = Venda::all();
        return view('/VendaView/listar-venda', ['vendas' => $vendas]);
    }

    //retorna a view de editar um venda, tambem retorna o venda que sera editado e todas as secoes disponiveis
    public function view_editar_venda(Request $request){

        $venda = Venda::find($request->id);
        $pedidos = Pedido::all();
        $formapagamentos = FormaPagamento::all();

        return view('/VendaView/editar-venda', ['venda' => $venda, 'pedidos' => $pedidos, 'formapagamentos' => $formapagamentos]);

    }
    public function editar_venda(Request $request){
        try{
            vendaValidator::Validate($request->all());
            $venda = Venda::find($request->id);
            $venda->pedido_id = $request->pedido_id;
            $venda->formapagamento_id = $request->formapagamento_id;
            $venda->data_venda = $request->data_venda;
            $venda->data_pagamento = $request->data_pagamento;
            $venda->update();
            return redirect("listar/venda");
        }
        catch(ValidationException $ex){
            return redirect("editar/venda")->withErrors($ex->getValidator())->withInput();
        }
    }
    //Faz um softDelete do venda selecionado do Banco de Dados
    public function remover_venda(Request $request){
        $venda = Venda::find($request->id);
        $venda->delete();
        return redirect("listar/venda");
    }

    public function gerar_relatorio_cliente(Request $request){
        $vendas = array();
        $cliente = Cliente::where('nome', 'ilike', '%'. $request->cliente. '%')->first();
        if(!empty($cliente)){
          $pedidos =  Pedido::where('cliente_id', '=', $cliente->id)->get();

          foreach ($pedidos as $pedido) {
            $venda =  Venda::where('pedido_id', '=', $pedido->id)->first();
            array_push($vendas, $venda);
          }
        }


        return view('/VendaView/relatorio-venda-resultado', ['vendas' => $vendas]);
    }

    public function gerar_relatorio_tipo_entrega(Request $request){
      $pedidos =  Pedido::where('tipoentrega_id', 'ilike', '%' . $request->tipoentrega . '%')
                    ->get();
      $vendas = array();
      foreach ($pedidos as $pedido) {
        $venda =  Venda::where('pedido_id', '=', $pedido->id)->first();
        array_push($vendas, $venda);
      }

      return view('/VendaView/relatorio-venda-resultado', ['vendas' => $vendas]);
    }

}
