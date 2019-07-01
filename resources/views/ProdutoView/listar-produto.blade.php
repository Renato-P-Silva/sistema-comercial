@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">
    
	<h1> Lista de Turmas </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>id</th>
				<th>Nome</th>
				<th>Categoria</th>
				<th>Quantidade</th>
				<th>Preço</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($produtos as $produto)
			<tr>
				<td>{{$produto->id}}</td>
				<td>{{$produto->nome}}</td>
				<td>{{$produto->categoria}}</td>
				<td>{{$produto->quantidade}}</td>
				<td>{{$produto->preco}}</td>
				<td> 
					<a href="/editar/produto/{{$produto->id}}">Editar</a> -
					<a href="/remover/produto/{{$produto->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/produto"> Adicionar um Produto</a>
@stop