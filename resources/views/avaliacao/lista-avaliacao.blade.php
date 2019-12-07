@extends('layouts.app')

@section('title', 'Listagem dos Métodos Avaliativos')

@section('titulo-pagina') Métodos Avaliativos @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-md-auto">#</th>
			<th scope="col-md-auto">Nome do Método Avaliativo</th>
			<th class="col col-lg-2">Opções</th>
			<th class="col col-lg-2">
				<a href="{{ url('/novo-avaliacao') }}">
					<button type="button" class="btn btn btn-success">Novo Método </button>
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>

			<th scope="row">1</th>
			<td>Prova</td>
			<td>
				<a href="{{ url('/edita-periodo/{id}') }}"><button type="button" class="btn btn-secondary">Editar</button></a> 
				<a href="{{ url('/apaga-periodo/{id}') }}"><button type="button" class="btn btn-danger">Apagar</button></a>
			</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Apresentação</td>
			<td>
				<a href="{{ url('/edita-periodo/{id}') }}"><button type="button" class="btn btn-secondary">Editar</button></a> 
				<a href="{{ url('/apaga-periodo/{id}') }}"><button type="button" class="btn btn-danger">Apagar</button></a>
			</td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td>Seminário</td>
			<td>
				<a href="{{ url('/edita-periodo/{id}') }}"><button type="button" class="btn btn-secondary">Editar</button></a> 
				<a href="{{ url('/apaga-periodo/{id}') }}"><button type="button" class="btn btn-danger">Apagar</button></a>
			</td>
		</tr>
		<tr>
			<th scope="row">4</th>
			<td>Lista de exercicio</td>
			<td>
				<a href="{{ url('/edita-periodo/{id}') }}"><button type="button" class="btn btn-secondary">Editar</button></a> 
				<a href="{{ url('/apaga-periodo/{id}') }}"><button type="button" class="btn btn-danger">Apagar</button></a>
			</td>
		</tr>
	</tbody>
</table>
@endsection