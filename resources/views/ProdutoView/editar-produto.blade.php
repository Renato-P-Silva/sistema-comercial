@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{URL('atualizar/produto/')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$produto->id}}">

                        <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                            <input id="nome" type="text" class="form-control" name="nome" value="{{$produto->nome}}" placeholder="{{$produto->nome}}" required autofocus>
                              @if ($errors->has('nome'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nome') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
                            <div class="col-md-6">
									<select class="custom-select" name="categoria">
										<option selected>Selecione a categoria</option>
										@foreach ($categorias as $categoria)
											<option value="{{$categoria->id}}">{{$categoria->nome}}</option>
										@endforeach
									</select>
                              @if ($errors->has('categoria'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('categoria') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="quantidade" class="col-md-4 col-form-label text-md-right">{{ __('Quantidade') }}</label>
                            <div class="col-md-6">
                              <input id="quantidade" type="text" class="form-control" name="quantidade" value="{{ old('quantidade') }}"  autofocus>
                              @if ($errors->has('quantidade'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('quantidade') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="preco" class="col-md-4 col-form-label text-md-right">{{ __('Preço') }}</label>
                            <div class="col-md-6">
                              <input id="preco" type="text" class="form-control" name="preco" value="{{ old('preco') }}"  autofocus>
                              @if ($errors->has('preco'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('preco') }}</strong>
                                  </span>
                              @endif
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Atualizar') }}
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
