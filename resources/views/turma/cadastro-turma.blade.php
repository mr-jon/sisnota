@extends('layouts.app')

@section('title', 'Nova Turma')

@section('content')

@section('titulo-pagina') Nova Turma @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-turma') }}">
	<div class="row">
		<div class="col-5">
			<label for="inputAddress">Nome da turma</label>
			<input name="nome_turma" type="text" class="form-control">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>

</form>
@endsection
