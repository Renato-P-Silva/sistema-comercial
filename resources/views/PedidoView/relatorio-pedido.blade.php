@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

          <form method="POST" action="{{ route('/relatorioCliente/pedido') }}">
              {{ csrf_field() }}
                @csrf

                <div class="form-group row">
                    <label for="cliente_id" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Cliente') }}</label>

                    <div class="col-md-6">
                      <input name="cliente_id" id= "cliente_id" type="text" class="form-control" placeholder="Digite o cliente" required value= {{ old('cliente')}}> {{ $errors->first('cliente_id')}}

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

              <form method="POST" action="{{ route('/relatorioCliente/pedido') }}">
                  {{ csrf_field() }}
                    @csrf

                    <div class="form-group row">
                        <label for="tipoentrega_id" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Tipo de Entrega') }}</label>

                        <div class="col-md-6">
                          <input name="tipoentrega_id" id= "tipoentrega_id" type="text" class="form-control" placeholder="Digite o tipo de entrega" required value= {{ old('tipoentrega_id')}}> {{ $errors->first('tipoentrega_id')}}

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



@stop
