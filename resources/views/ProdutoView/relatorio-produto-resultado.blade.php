@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

        @if(count($produtos) == 0 and count($produtos) == 0)
            <div class="alert alert-danger">
                Não foram encontrados produtos com este termo de busca.
            </div>
        @else

            <h1> Lista de Produtos </h1><br><br>
            <table class="table">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Categoria</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <?php
                        $id = $produto->categoria;
                        $categoria = \App\Endereco::where('id', '=', $id)->first();?>
                        <td>{{$categoria->nome}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    @endif
@stop
