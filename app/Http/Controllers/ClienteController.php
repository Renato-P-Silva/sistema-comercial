<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    function cadastrar_cliente(Request $request)
        {
            try {

                ClienteValidator::Validate($request->all());

                
                $cliente = new Cliente();
                $endereco = new  Endereco();

                $cliente->nome = $request->get('nome');
                $cliente->cpf = $request->get('cpf');
                $cliente->email = $request->get('email');
                $cliente->telefone = $request->get('telefone');
                
                $endereco->cidade = $request->get('cidade');
                $endereco->logradouro = $request->get('logradouro');
                $endereco->estado = $request->get('estado');
                $endereco->bairro = $request->get('bairro');
                $endereco->numero = $request->get('numero');
                $endereco->save();

                $cliente->endereco_id = $endereco->id; 
                $cliente->save();               
             
                return redirect('listar/cliente');

            } catch (ValidationException $ex) {
                return redirect("cadastrar/cliente")->withErrors($ex->getValidator())->withInput();

            }
        }

        public function view_cadastrar_cliente(){
            return view('/ClienteView/cadastrar-cliente');
        }

        public function listar_cliente(){
            $clientes = Cliente::all();
            return view('/clienteView/listar-cliente', ['clientes' => $clientes]);
        }

        public function remover_cliente(Request $request){
            $cliente = Cliente::find($request->id);
            $cliente->delete();
            return redirect("listar\cliente");
        }

        public function view_editar_cliente(Request $request){
            $cliente = Cliente::find($request->id);
            return view('/ClienteView/editar-cliente',['cliente' =>$cliente]);
        }
        public function editar_cliente(Request $request){
            try{
                ClienteValidator::Validate($request->all());

                $cliente = Cliente::find($request->id);
                $endereco = Endereco::find($cliente->endereco_id);


                $cliente->nome = $request->get('nome');
                $cliente->cpf = $request->get('cpf');
                $cliente->email = $request->get('email');
                $cliente->telefone = $request->get('telefone');
                $cliente->update();
                $endereco->cidade = $request->get('cidade');
                $endereco->logradouro = $request->get('logradouro');
                $endereco->estado = $request->get('estado');
                $endereco->bairro = $request->get('bairro');
                $endereco->numero = $request->get('numero');
                $endereco->update();

      
                return redirect("listar/cliente");
            }
            catch(ValidationException $ex){
                return redirect("editar/cliente")->withErrors($ex->getValidator())->withInput();
            }
        }






    }
