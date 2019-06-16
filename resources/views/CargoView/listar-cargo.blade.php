@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">

	<h1> Lista de Cargos </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>id</th>
				<th>nome</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cargos as $cargo)
			<tr>
				<td>{{$cargo->id}}</td>
				<td>{{$cargo->nome}}</td>
				<td>
					<a href="/editar/cargo/{{$cargo->id}}">Editar</a> -
					<a href="/remover/cargo/{{$cargo->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/cargo"> Adicionar um Cargo</a>
@stop
