@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

	<h1> Lista de Pedidos </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>id</th>
				<th>valor</th>
				<th>produto</th>
				<th>cliente</th>
				<th>tipo entrega</th>
				<th>data</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pedidos as $pedido)
			<tr>
				<td>{{$pedido->id}}</td>
				<td>{{$pedido->valor}}</td>
				<td>{{$pedido->produto_id}}</td>
				<td>{{$pedido->cliente_id}}</td>
				<td>{{$pedido->tipoentrega_id}}</td>
				<td>{{$pedido->data}}</td>
				<td>
					<a href="/editar/pedido/{{$pedido->id}}">Editar</a> -
					<a href="/remover/pedido/{{$pedido->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/pedido"> Novo pedido</a>
@stop
