<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Endereco;
use App\Validator\ClienteValidator;
use App\Validator\ValidationException;

class ClienteController extends Controller
{
    function cadastrar_cliente(Request $request)
        {
            try {

                ClienteValidator::Validate($request->all());


                $cliente = new Cliente();
                $endereco = new  Endereco();
                $cliente->nome = $request->nome;
                $cliente->cpf = $request->cpf;
                $cliente->email = $request->email;
                $cliente->telefone = $request->telefone;
                $cliente->save();

                $endereco->cidade = $request->cidade;
                $endereco->logradouro = $request->logradouro;
                $endereco->estado = $request->estado;
                $endereco->bairro = $request->bairro;
                $endereco->numero = $request->numero;


                $endereco->cliente_id = $cliente->id;
                $endereco->save();

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
            return view('/ClienteView/listar-cliente', ['clientes' => $clientes]);
        }

        public function remover_cliente(Request $request){
            $cliente = Cliente::find($request->id);
            $cliente->delete();
            return redirect("listar\cliente");
        }

        public function view_editar_cliente(Request $request){
            $cliente = Cliente::find($request->id);
            $endereco = Endereco::find($cliente->endereco_id);
            return view('/ClienteView/editar-cliente',['cliente' =>$cliente, 'endereco' => $endereco]);
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

        public function gerar_relatorio_cidade(Request $request){

            $enderecos = Endereco::where('cidade', 'ilike', '%' . $request->cidade . '%')
													->get();
            $clientes = array();
            foreach ($enderecos as $endereco) {
              $cliente = \App\Cliente::find($endereco->cliente_id);
              array_push($clientes, $cliente);
            }
            // Necessario descomentar para executar os testes
//            return $clientes;

            //Fluxo normal
            return view('/ClienteView/relatorio-cliente-resultado', ['clientes' => $clientes]);
        }

        public function gerar_relatorio_bairro(Request $request){
            $enderecos = Endereco::where('bairro', 'ilike', '%' . $request->bairro . '%')
													->get();

            $clientes = array();
            foreach ($enderecos as $endereco) {
              $cliente = \App\Cliente::find($endereco->cliente_id);
              array_push($clientes, $cliente);
            }

            // Necessario descomentar para executar os testes
//            return $clientes;

//            //Fluxo normal
            return view('/ClienteView/relatorio-cliente-resultado', ['clientes' => $clientes]);
        }

    }
