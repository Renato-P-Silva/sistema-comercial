@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

        <h1> Lista de Vendas </h1><br><br>
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>pedido id</th>
                <th>forma pagamento</th>
                <th>data venda</th>
                <th>data pagamento</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($vendas as $venda)
                <tr>
                    <td>{{$venda->id}}</td>
                    <td>{{$venda->pedido_id}}</td>
                    <?php
                    $id = $venda->formapagamento_id;
                    $forma_pagamento = \App\FormaPagamento::where('id', '=', $id)->first();

                    ?>
                    <td>{{$forma_pagamento->nome}}</td>
                    <td>{{$venda->data_venda}}</td>
                    <td>{{$venda->data_pagamento}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

@stop
