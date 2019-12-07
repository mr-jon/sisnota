@extends('layouts.app')


@section('title', 'Editando Usuario')

@section('content')
@section('titulo-pagina') Cadastro do Usuario @endsection
<form method="POST" action="{{ URL::to('/atualiza-usuario/') }}">
	<div class="row">
		<div class="col-sm-1">
			<label for="inputAddress">ID</label>
			<input name="id" type="text" class="form-control" value="{{$dados->id}}" readonly="">
		</div>
		<div class="col">
			<label for="inputAddress">Nome</label>
			<input name="nome" type="text" class="form-control" value="{{$dados->name}}">
		</div>
		<div class="col">
			<label for="inputAddress">Email</label>
			<input name="email" type="email" class="form-control" value="{{$dados->email}}">
		</div>
		<div class="col">
			<label for="inputAddress">Nova Senha</label>
			<input name="senha" type="password" class="form-control">
		</div>
	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
