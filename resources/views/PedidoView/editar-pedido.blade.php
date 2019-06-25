@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{URL('atualizar/pedido/')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$pedido->id}}">

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Valor') }}</label>
                            <div class="col-md-6">
                            <input id="valor" type="text" class="form-control" name="valor" value="{{$pedido->valor}}" placeholder="{{$pedido->valor}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Produto') }}</label>
                            <div class="col-md-6">
                            <input id="produto" type="text" class="form-control" name="id_produto" value="{{$pedido->produto_id}}" placeholder="{{$pedido->produto_id}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                            <div class="col-md-6">
                            <input id="cliente" type="text" class="form-control" name="id_cliente" value="{{$pedido->cliente_id}}" placeholder="{{$pedido->cliente_id}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('TipoEntrega') }}</label>
                            <div class="col-md-6">
                            <input id="tipoEntregta" type="text" class="form-control" name="id_tipoentrega" value="{{$pedido->tipoentrega_id}}" placeholder="{{$pedido->tipoentrega_id}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>
                            <div class="col-md-6">
                            <input id="data" type="date" class="form-control" name="data" value="{{$pedido->data}}" placeholder="{{$pedido->data}}" >
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('atualizar') }}
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
