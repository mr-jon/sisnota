@extends('layouts.app')


@section('title', 'Editando Aluno')

@section('content')
@section('titulo-pagina') Cadastro do Aluno @endsection
<form method="POST" action="{{ URL::to('/atualiza-matricula') }}">
	<div class="row">
		<div class="col-1">
			<label for="inputAddress">ID</label>
			<input name="id_matricula" type="text" class="form-control" value="{{$matriculaEscolhida[0]->id}}" readonly>
		</div>

		<div class="form-group col-3">
			<label for="inputAddress">Aluno</label>
			<select name="id_aluno" class="form-control">
				<option value="{{$matriculaEscolhida[0]->id_aluno}} " selected>
					{{$matriculaEscolhida[0]->alunos->nome}} 
				</option>

				<?php  foreach ($alunos as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome}}</option>
				<?php  };  ?>

			</select>
		</div>

		<div class="col-ms-2">
			<label for="date">Ano letivo</label>
			<input name="data_matricula" type="text" class="form-control" value="{{$matriculaEscolhida[0]->data_matricula}}">
		</div>

	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
