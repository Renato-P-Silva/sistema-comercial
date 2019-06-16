@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

	<h1> Lista de Categorias </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>id</th>
				<th>nome</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($categorias as $categoria)
			<tr>
				<td>{{$categoria->id}}</td>
				<td>{{$categoria->nome}}</td>
				<td>
					<a href="/editar/categoria/{{$categoria->id}}">Editar</a> -
					<a href="/remover/categoria/{{$categoria->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/categoria"> Adicionar uma Categoria</a>
@stop
