@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

                  <form method="POST" action="{{ route('/relatorioCliente/venda') }}">
                      {{ csrf_field() }}
                        @csrf

                        <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Cliente') }}</label>

                            <div class="col-md-6">
                              <input name="cliente" id= "cliente" type="text" class="form-control" placeholder="Digite o nome do cliente" required value= {{ old('cliente')}}> {{ $errors->first('cliente')}}

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Buscar
                              </button>
                            </div>
                        </div>
                      </form>
                      <br>
                      <form method="POST" action="{{ route('/relatorioEntrega/venda') }}">
                        {{ csrf_field() }}
                          @csrf
                        <div class="form-group row">
                            <label for="tipoentrega" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Tipo de entrega') }}</label>

                            <div class="col-md-6">
                              <input name="tipoentrega" id= "tipoentrega" type="text" class="form-control" placeholder="Digite o tipo da entrega" required value= {{ old('tipoentrega')}}> {{ $errors->first('tipoentrega')}}

                            </div>
                        </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-6 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      Buscar
                                  </button>
                              </div>
                          </div>
                      </form>
        <br>

        <form method="POST" action="{{ route('/relatorioProduto/venda') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="produto_id" class="col-md-4 col-form-label text-md-right">{{ __('Listar por produto') }}</label>

                <div class="col-md-6">
                    <input name="produto_id" id= "produto_id" type="text" class="form-control" placeholder="Digite o id do produto" required value= {{ old('produto_id')}}> {{ $errors->first('produto_id')}}

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <br>

                          <form method="POST" action="{{ route('/relatorioFormaPagamento/venda') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="cliente_id" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Forma de Pagamento') }}</label>

                <div class="col-md-6">
                    <input name="formapagamento_id" id= "formapagamento_id" type="text" class="form-control" placeholder="Digite a forma de pagamento" required value= {{ old('formapagamento_id')}}> {{ $errors->first('formapagamento_id')}}

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <br>
        <form method="POST" action="{{ route('/relatorioPeriodo/venda') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Periodo') }}</label>

                <div class="col-md-6">
                    <input name="data_inicio" id= "data_inicio" type="date" class="form-control" placeholder="Digite a data inicial" required value= {{ old('data_inicio')}}> {{ $errors->first('data_inicio')}}
                    <input name="data_final" id= "data_final" type="date" class="form-control" placeholder="Digite a data final" required value= {{ old('data_final')}}> {{ $errors->first('data_final')}}
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <br>
        <form method="POST" action="{{ route('/relatorioValorMinimo/venda') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="valorminimo" class="col-md-4 col-form-label text-md-right">{{ __('Listar por valor mínimio') }}</label>

                <div class="col-md-6">
                    <input name="valorminimo" id= "valorminimo" type="text" class="form-control" placeholder="Digite o valor minimo da venda" required value= {{ old('valorminimo')}}> {{ $errors->first('valorminimo')}}

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <br>
        <form method="POST" action="{{ route('/relatorioCategoria/venda') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Listar por categoria') }}</label>

                <div class="col-md-6">
                    <input name="categoria" id= "categoria" type="text" class="form-control" placeholder="Digite o tipo de entrega" required value= {{ old('categoria')}}> {{ $errors->first('categoria')}}

                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
        <br>

        <br>

@stop
