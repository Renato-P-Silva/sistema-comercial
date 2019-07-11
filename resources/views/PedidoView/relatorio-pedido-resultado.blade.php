@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

      @if(count($pedidos) == 0 and count($pedidos) == 0)
          <div class="alert alert-danger">
                      Não foram encontrados pedidos com este termo de busca.
          </div>
      @else

	<h1> Lista de Pedidos </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
        <th>Id</th>
				<th>Valor</th>
				<th>Produtos</th>
        <th>Cliente</th>
        <th>Tipo entrega</th>
        <th>Data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pedidos as $pedido)
			<tr>
        <td>{{$pedido->id}}</td>
				<td>{{$pedido->valor}}</td>
				<td>{{$pedido->produtos_id}}</td>
        <td>{{$pedido->cliente_id}}</td>
        <td>{{$pedido->tipoentrega_id}}</td>
        <td>{{$pedido->data}}</td>

        <!-- // <td>
				// 	<a href="/relatorios/pedido/">Voltar</a> -
				// </td> -->
			</tr>
			@endforeach
		</tbody>
	</table>
@endif
@stop
