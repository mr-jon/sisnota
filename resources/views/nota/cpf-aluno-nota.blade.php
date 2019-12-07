@extends('layouts.app')

@section('title', 'Nota')

@section('titulo-pagina')Nota @endsection

@section('content')
<form method="POST" action="{{ URL::to('/gera-pdf') }}">
	<div class="row">
		<div class="col-4">
			<label for="inputAddress">ID do aluno</label>
			<input type="text" class="form-control" name="id">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Gerar boletin</button>
	</dir>

</form>
@endsection
