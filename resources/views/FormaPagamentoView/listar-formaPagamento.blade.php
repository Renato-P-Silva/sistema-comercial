@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">
    
	<h1> Lista de Formas de Pagamento </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>id</th>
				<th>Nome</th>
				<th>Descrição</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($formaPagamentos as $formaPagamento)
			<tr>
				<td>{{$formaPagamento->id}}</td>
				<td>{{$formaPagamento->nome}}</td>
				<td>{{$formaPagamento->descricao}}</td>
				<td> 
					<a href="/editar/formaPagamento/{{$formaPagamento->id}}">Editar</a> -
					<a href="/remover/formaPagamento/{{$formaPagamento->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/produto"> Adicionar um Produto</a>
@stop