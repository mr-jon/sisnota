@extends('layouts.app')

@section('title', 'Novo aluno')

@section('content')

@section('titulo-pagina') Novo Aluno @endsection

@section('content')
<form method="POST" action="{{ URL::to('/cadastro-aluno') }}">
	<div class="row">
		<div class="col">
			<label for="inputAddress">Nome completo</label>
			<input name="nome" type="text" class="form-control" placeholder="Nome">
		</div>
		<div class="col">
			<label for="date">Data de Nascimento</label>
			<input name="datanascimento" type="date" class="form-control">
		</div>
		<div class="col">
			<label for="inputAddress">CPF</label>
			<input name="cpf" type="text" class="form-control" placeholder="Somente os numeros">
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Naturalidade</label>
			<input name="naturalidade"  type="text" class="form-control" placeholder="Naturalidade">
		</div>
		<div class="col">
			<label for="inputAddress">Nacionalidade</label>
			<input name="nacionalidade" type="text" class="form-control" placeholder="Nacionalidade">
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
				<option value="Mato Grosso do Su">Mato Grosso do Sul</option>
				<option value="Mato Grosso">Mato Grosso</option>
				<option value="Amapá">Amapá</option>
			</select>
		</div>
		
	</div>
	<h2>Filiação</h2>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Nome do pai</label>
			<input name="nome_pai" type="text" class="form-control" placeholder="Nome completo">
		</div>
		<div class="col-md-2">
			<label for="inputAddress">CPF do pai</label>
			<input name="cpf_pai" type="text" class="form-control" placeholder="Somente os numeros">
		</div>
		<div class="col">
			<label for="inputAddress">Nome da mãe</label>
			<input name="nome_mae" type="text" class="form-control" placeholder="Nome completo">
		</div>
		<div class="col-md-2">
			<label for="inputAddress">CPF do mãe</label>
			<input name="cpf_mae" type="text" class="form-control" placeholder="Somente os numeros">
		</div>
	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
