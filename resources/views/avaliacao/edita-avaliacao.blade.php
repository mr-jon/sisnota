@extends('layouts.app')

@section('title', 'Editando Método Avaliativo')

@section('content')

@section('titulo-pagina')Cadastro do Método Avaliativo @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-avaliacao') }}">
	<div class="row">
		<div class="col-1">
			<label for="inputAddress">ID</label>
			<input type="text" class="form-control" value="xx" readonly>
		</div>
		<div class="col-5">
			<label for="inputAddress">Nome do preriodo</label>
			<input name="nome" type="text" class="form-control">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>

</form>
@endsection
