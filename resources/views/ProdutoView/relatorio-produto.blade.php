@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

        <form method="POST" action="{{ route('/relatorioCategoria/produto') }}">
            {{ csrf_field() }}
            @csrf

            <div class="form-group row">
                <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Listar por Categoria') }}</label>

                <div class="col-md-6">
                    <input name="categoria" id= "categoria" type="text" class="form-control" placeholder="Digite a categoria" required value= {{ old('categoria')}}> {{ $errors->first('categoria')}}

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
