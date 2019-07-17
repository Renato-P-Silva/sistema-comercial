@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastro') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{URL('salvar/venda/')}}">
                            @csrf

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Pedido') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('pedido_id') ? ' has-danger' : '' }}">
                                        <select id="pedido_id" class="form-control{{ $errors->has('pedido_id') ? ' is-invalid' : '' }}" name="pedido_id" required autofocus>
                                            <option hidden disabled selected required autofocus></option>
                                            @foreach ($pedidos as $pedido)
                                                <option value="{{$pedido->id}}" required autofocus  >{{$pedido->id}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('pedido_id'))
                                            <span id="pedido-error" class="error text-danger"
                                                  for="input-pedido">{{ $errors->first('pedido_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label">{{ __('Forma de Pagamento') }}</label>
                                <div class="col-sm-7">
                                    <div class="form-group{{ $errors->has('formapagamento_id') ? ' has-danger' : '' }}">
                                        <select id="formapagamento_id" class="form-control{{ $errors->has('formapagamento_id') ? ' is-invalid' : '' }}" name="formapagamento_id" required autofocus>
                                            <option hidden disabled selected required autofocus></option>
                                            @foreach ($formapagamentos as $formapagamento)
                                                <option value="{{$formapagamento->id}}" required autofocus  >{{$formapagamento->descricao}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('formapagamento_id'))
                                            <span id="formapagamento-error" class="error text-danger"
                                                  for="input-formapagamento">{{ $errors->first('formapagamento_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label for="nome" class="col-sm-2 col-form-label">{{ __('Data Pagamento') }}</label>
                                <div class="col-sm-7">
                                    <input id="data_pagamento" type="date" class="form-control" name="data_pagamento" value="" >
                                    @if ($errors->has('data_pagamento'))
                                        <span class="help-block">
                                      <strong>{{ $errors->first('data_pagamento') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <label for="nome" class="col-sm-2 col-form-label">{{ __('Data Venda') }}</label>
                                <div class="col-sm-7">
                                    <input id="data_venda" type="date" class="form-control" name="data_venda" value="" >
                                    @if ($errors->has('data_venda'))
                                        <span class="help-block">
                                      <strong>{{ $errors->first('data_venda') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Cadastrar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
