@extends('layouts.app')

@section('title', 'Novo professor')

@section('titulo-pagina') Novo Professor @endsection

@section('content')

<form method="POST" action="{{ URL::to('/cadastro-professor') }}">
	<div class="row">
		<div class="col">
			<label for="inputAddress">Nome completo</label>
			<input name="nome" type="text" class="form-control" placeholder="Nome">
		</div>
		<div class="col">
			<label for="inputAddress">CPF</label>
			<input name="cpf" type="text" class="form-control" placeholder="Somente os numeros">
		</div>
		<div class="col">
			<label for="inputAddress">Telefone</label>
			<input name="telefone" type="text" class="form-control" placeholder="Somente os numeros">
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Endereço</label>
			<input name="endereco" type="text" class="form-control" placeholder="Rua do bobos,nº0">
		</div>
		<div class="col">
			<label for="inputAddress">Bairro</label>
			<input name="bairro" type="text" class="form-control" placeholder="Bairro dos bobos">
		</div>
		<div class="form-group col-md-2">
			<label for="inputCEP">CEP</label>
			<input name="cep" type="text" class="form-control" id="inputCEP">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-2">
			<label for="inputCity">Cidade</label>
			<input name="cidade" type="text" class="form-control" id="inputCity">
		</div>
		<div class="form-group col-md-4">
			<label for="inputEstado">Estado</label>
			<select name="estado" id="inputEstado" class="form-control">
				<option selected>Escolher...</option>
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
