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

@stop
