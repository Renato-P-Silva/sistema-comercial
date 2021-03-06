@extends('layouts.app')
@section('content')
    <div class="shadow p-4 mb-5 bg-white rounded container-fluid" style="overflow-x: auto;">


	<h1> Lista de Clientes </h1><br><br>
	<table class="table">
 		<thead>
			<tr>
				<th>Nome</th>
				<th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Bairro</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($clientes as $cliente)
			<tr>
				<td>{{$cliente->nome}}</td>
				<td>{{$cliente->cpf}}</td>
        <td>{{$cliente->email}}</td>
        <td>{{$cliente->telefone}}</td>
        <?php
        $id = $cliente->id;
        $endereco = \App\Endereco::where('cliente_id', '=', $id)->first();?>
        <td>{{$endereco->cidade}}</td>
        <td>{{$endereco->estado}}</td>
        <td>{{$endereco->bairro}}</td>
				<td>
					<a href="/editar/cliente/{{$cliente->id}}">Editar</a> -
					<a href="/remover/cliente/{{$cliente->id}}">Remover</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/cadastrar/cliente"> Adicionar um Cliente</a>
@stop
