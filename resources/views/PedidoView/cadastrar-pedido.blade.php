@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{URL('salvar/pedido/')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="valor" class="col-md-4 col-form-label text-md-right">{{ __('Valor') }}</label>
                            <div class="col-md-6">
                              <input id="valor" type="text" class="form-control" name="valor" value="{{ old('valor') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_produto" class="col-md-4 col-form-label text-md-right">{{ __('Produto') }}</label>
                            <div class="col-md-6">
                              <input id="id_produto" type="text" class="form-control" name="id_produto" value="{{ old('produto') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>
                            <div class="col-md-6">
                              <input id="id_cliente" type="text" class="form-control" name="id_cliente" value="{{ old('cliente') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('TipoEntrega') }}</label>
                            <div class="col-md-6">
                              <input id="id_tipoentrega" type="text" class="form-control" name="id_tipoentrega" value="{{ old('tipoEntrega') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="data" value="" >

{{--                                <input id="date" type="date" class="form-control" name="data" value="{{$db->year}}-{{$db->month}}-{{$db->day}}" >--}}
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
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
