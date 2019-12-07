@extends('layouts.app')


@section('title', 'Editando Aluno')

@section('content')
@section('titulo-pagina') Cadastro do Aluno @endsection
<form method="POST" action="{{ URL::to('/atualiza-aluno') }}">
	<div class="row">
		<div class="col-1">
			<label for="inputAddress">ID</label>
			<input name="id" type="text" class="form-control" value="{{$dados->id}}" readonly>
		</div>
		<div class="col">
			<label for="inputAddress">Nome completo</label>
			<input name="nome" type="text" class="form-control" value="{{$dados->nome}}">
		</div>
		<div class="col">
			<label for="date">Data de Nascimento</label>
			<input name="datanascimento" type="date" class="form-control" value="{{$dados->data_nascimento}}">
		</div>
		<div class="col">
			<label for="inputAddress">CPF</label>
			<input name="cpf" type="text" class="form-control" value="{{$dados->cpf}}">
		</div>
	</div>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Naturalidade</label>
			<input name="naturalidade"  type="text" class="form-control" value="{{$dados->naturalidade}}">
		</div>
		<div class="col">
			<label for="inputAddress">Nacionalidade</label>
			<input name="nacionalidade" type="text" class="form-control" value="{{$dados->nacionalidade}}">
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
	<h2>Filiação</h2>
	<div class="row">
		<div class="col">
			<label for="inputAddress">Nome do pai</label>
			<input name="nome_pai" type="text" class="form-control" value="{{$dados->nome_pai}}">
		</div>
		<div class="col-md-2">
			<label for="inputAddress">CPF do pai</label>
			<input name="cpf_pai" type="text" class="form-control" value="{{$dados->cpf_pai}}">
		</div>
		<div class="col">
			<label for="inputAddress">Nome da mãe</label>
			<input name="nome_mae" type="text" class="form-control" value="{{$dados->nome_mae}}">
		</div>
		<div class="col-md-2">
			<label for="inputAddress">CPF do mãe</label>
			<input name="cpf_mae" type="text" class="form-control" value="{{$dados->cpf_mae}}">
		</div>
	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
