@extends('layouts.app')

@section('title', 'Editando o professor')

@section('titulo-pagina') Cadastro do Professor @endsection

@section('content')

<form method="POST" action="{{ URL::to('/atualiza-professor') }}">
	<div class="row">
		<div class="col-1">
			<label for="inputAddress">ID</label>
			<input type="text" name="id" class="form-control" value="{{$dados->id}}" readonly>
		</div>
		<div class="col">
			<label for="inputAddress">Nome completo</label>
			<input name="nome" type="text" class="form-control" value="{{$dados->nome}}">
		</div>
		<div class="col">
			<label for="inputAddress">CPF</label>
			<input name="cpf" type="text" class="form-control" value="{{$dados->cpf}}">
		</div>
		<div class="col">
			<label for="inputAddress">Telefone</label>
			<input name="telefone" type="text" class="form-control" value="{{$dados->telefone}}">
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Endereço</label>
			<input name="endereco" type="text" class="form-control" value="{{$dados->endereco}}">
		</div>
		<div class="col">
			<label for="inputAddress">Bairro</label>
			<input name="bairro" type="text" class="form-control" value="{{$dados->bairro}}">
		</div>
		<div class="form-group col-md-2">
			<label for="inputCEP">CEP</label>
			<input name="cep" type="text" class="form-control" id="inputCEP" value="{{$dados->cep}}">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-2">
			<label for="inputCity">Cidade</label>
			<input name="cidade" type="text" class="form-control" id="inputCity" value="{{$dados->cidade}}">
		</div>
		<div class="form-group col-md-4">
			<label for="inputEstado">Estado</label>
			<select name="estado" id="inputEstado" class="form-control" value="{{$dados->estado}}">
				<option selected>{{$dados->estado}}</option>
				<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
				<option value="Mato Grosso">Mato Grosso</option>
				<option value="Amapá">Amapá</option>
			</select>
		</div>
	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
