<?php

namespace App\Http\Controllers;

use App\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //

    public function listar_pedidos(){
        $pedidos = Pedido::all();
        return view('/PedidoView/listar-pedido', ["pedidos" => $pedidos]);
    }

    public function get_view_cadastrar(){
        return view('/PedidoView/cadastrar-pedido');
    }

    public function salvar_pedido(Request $request){

            $pedido = new Pedido();
            $pedido->valor = $request->valor;
            $pedido->produto_id = $request->id_produto;
            $pedido->cliente_id = $request->id_cliente;
            $pedido->tipoentrega_id = $request->id_tipoentrega;
            $pedido->data = $request->data;

            $pedido->save();
            return redirect("listar/pedido");


    }

    public function remover_pedido($id){

        $pedido = Pedido::find($id);
        $pedido->delete();
        return redirect("listar/pedido");


    }

    public function get_view_atualizar($id){
        $pedido = Pedido::find($id);
        return view('/PedidoView/editar-pedido', ["pedido" => $pedido]);
    }

    public function atualizar_pedido(Request $request){

        $pedido = Pedido::find($request->id);
        $pedido->valor = $request->valor;
        $pedido->produto_id = $request->id_produto;
        $pedido->cliente_id = $request->id_cliente;
        $pedido->tipoentrega_id = $request->id_tipoentrega;
        $pedido->data = $request->data;

        $pedido->update();
        return redirect("listar/pedido");


    }





}
