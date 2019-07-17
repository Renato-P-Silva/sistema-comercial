@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

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
        <br>



@stop
