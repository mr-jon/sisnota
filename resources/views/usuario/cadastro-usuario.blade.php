@extends('layouts.app')

@section('title', 'Novo Usuario')

@section('content')

@section('titulo-pagina') Novo Usuario @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-usuario') }}">
	<div class="row">
		<div class="col">
			<label for="inputAddress">Nome</label>
			<input name="nome" type="text" class="form-control" placeholder="Primeiro nome">
		</div>
		<div class="col">
			<label for="inputAddress">Email</label>
			<input name="email" type="text" class="form-control">
		</div>
		<div class="col">
			<label for="inputAddress">Senha</label>
			<input name="senha" type="password" class="form-control" placeholder="Crie uma senha forte !!!">
		</div>
	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
</form>
@endsection
