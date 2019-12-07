@extends('layouts.app')


@section('title', 'Cadastro Matrícula')

@section('content')

@section('titulo-pagina') Cadastro da Matrícula @endsection
<form method="POST" action="{{ URL::to('/cadastro-matricula') }}">
	<div class="row">

		<div class="form-group col-3">
			<label for="inputAddress">Aluno</label>
			<select name="id_aluno" class="form-control">
				<option selected>Escolher...</option>

				<?php  foreach ($dados as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome}}</option>
				<?php  };  ?>
			
			</select>
		</div>

		<div class="col-ms-2">
			<label for="date">Ano letivo</label>
			<input name="data_matricula" type="text" class="form-control" placeholder="Exemplo: 2019" >
		</div>


	</div>
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
