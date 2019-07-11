@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

                  <form method="POST" action="{{ route('/relatorioCidade/cliente') }}">
                      {{ csrf_field() }}
                        @csrf

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Cidade') }}</label>

                            <div class="col-md-6">
                              <input name="cidade" id= "cidade" type="text" class="form-control" placeholder="Digite a cidade" required value= {{ old('cidade')}}> {{ $errors->first('cidade')}}

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
                      <form method="POST" action="{{ route('/relatorioBairro/cliente') }}">
                        {{ csrf_field() }}
                          @csrf
                        <div class="form-group row">
                            <label for="bairro" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Bairro') }}</label>

                            <div class="col-md-6">
                              <input name="bairro" id= "bairro" type="text" class="form-control" placeholder="Digite o bairro" required value= {{ old('bairro')}}> {{ $errors->first('bairro')}}

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
