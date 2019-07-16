@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{URL('salvar/formaPagamento/')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                              <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}"  autofocus>
                              @if ($errors->has('nome'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nome') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>
                            <div class="col-md-6">
                              <input id="descricao" type="text" class="form-control" name="descricao" value="{{ old('descricao') }}"  autofocus>
                              @if ($errors->has('descricao'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('descricao') }}</strong>
                                  </span>
                              @endif
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
