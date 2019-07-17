@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

        @if(count($vendas) == 0 and count($vendas) == 0)
            <div class="alert alert-danger">
                Não foram encontrados vendas com este termo de busca.
            </div>
        @else

            <h1> Lista de vendas </h1><br><br>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Numero Pedido</th>
                    <th>Forma Pagamento</th>
                    <th>Data Venda</th>
                    <th>Data Pagamento</th>
                    <th>Valor</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{$venda->id}}</td>
                        <td>{{$venda->pedido_id}}</td>
                        <td>{{$venda->formapagamento->nome}}</td>
                        <td>{{$venda->data_venda}}</td>
                        <td>{{$venda->data_pagamento}}</td>
                        <td>{{$venda->pedido->valor}}</td>


                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="card">
                <div class="card-body text-right text-dark font-weight-bold">
                    Valor Total: R$ {{$total}}
                </div>
            </div>

    @endif
@stop
