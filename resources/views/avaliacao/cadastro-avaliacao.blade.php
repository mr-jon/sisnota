@extends('layouts.app')

@section('title', 'Novo Método Avaliativo')

@section('content')

@section('titulo-pagina') Novo Método Avaliativo @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-avaliacao') }}">
	<div class="row">
		<div class="col-5">
			<label for="inputAddress">Nome do método</label>
			<input name="nome" type="text" class="form-control" placeholder="Exemplo: Prova, Trabalho em grupo, Seminário">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>

</form>
@endsection
