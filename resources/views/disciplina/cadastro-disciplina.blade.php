@extends('layouts.app')

@section('title', 'Nova Disciplina')

@section('content')

@section('titulo-pagina') Nova Disciplina @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-disciplina') }}">
	<div class="row">
		<div class="col-5">
			<label for="inputAddress">Nome da disciplina</label>
			<input name="nome_disciplina" type="text" class="form-control">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>

</form>
@endsection
