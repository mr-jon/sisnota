@extends('layouts.app')

@section('title', 'Nota')

@section('titulo-pagina')Lançamento das notas @endsection

@section('content')
<form method="POST" action="{{ URL::to('/busca-nota') }}">
	<div class="row">

		<div class="form-group col-3">
			<label for="inputAddress">Aluno</label>
			<select name="id_aluno" class="form-control">
				<option selected>Escolher...</option>

				<?php  foreach ($alunos as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome}}</option>
				<?php  };  ?>

			</select>
		</div>



		<div class="form-group col-3">
			<label for="inputAddress">Disciplina</label>
			<select name="id_disciplina" class="form-control">
				<option selected>Escolher...</option>

				<?php  foreach ($disciplinas as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome_disciplina}}</option>
				<?php  };  ?>

			</select>
		</div>


		<div class="col-3">
			<label for="inputAddress">Ano Letivo</label>
			<input name="ano_letivo" type="text" class="form-control">
		</div>


	</div>	

	<dir class="row">
		<button type="submit" class="btn btn-primary">Buscar</button>
	</dir>

</form>
@endsection
