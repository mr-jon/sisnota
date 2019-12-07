@extends('layouts.app')

@section('title', 'Disciplina lecionada')

@section('content')

@section('titulo-pagina') Disciplina lecionada @endsection

@section('content')
<form method="POST" action="{{ URL::to('/atualiza-lecionada') }}">
	<div class="row">

		<div class="col-1">
			<label>ID</label>
			<input name="id_lecionada" type="text" class="form-control" value="{{$disciplinaLecionada[0]->id}}" readonly>
		</div>



		<div class="form-group col-3">
			<label for="inputAddress">Professor</label>
			<select name="id_professor" class="form-control">
				<option value="{{ $disciplinaLecionada[0]->id_professor }}" selected>
					{{ $disciplinaLecionada[0]->professores->nome }}
				</option>

				<?php  foreach ($professores as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome}}</option>
				<?php  };  ?>

			</select>
		</div>
		

		<div class="form-group col-3">
			<label for="inputAddress">Nome da disciplina</label>
			<select name="id_disciplina" class="form-control" >
				<option value="{{$disciplinaLecionada[0]->id_disciplina}}" selected>
					{{ $disciplinaLecionada[0]->disciplinas->nome_disciplina }}
				</option>

				<?php  foreach ($disciplinas as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome_disciplina}}</option>
				<?php  };  ?>

			</select>
		</div>


		<div class="form-group col-3">
			<label for="inputAddress">Turma</label>
			<select name="id_turma" class="form-control">
				<option value="{{$disciplinaLecionada[0]->id_turma}} " selected>
					{{ $disciplinaLecionada[0]->turmas->nome_turma }}
				</option>

				<?php  foreach ($turmas as $value){  ?> 
					<option value="{{$value->id}}">{{$value->nome_turma}}</option>
				<?php  };  ?>

			</select>
		</div>


		<div class="col-2">
			<label for="inputAddress">Ano Letivo</label>
			<input name="ano_letivo" value="{{$disciplinaLecionada[0]->ano_letivo}}"  type="date" class="form-control">
		</div>
	</div>	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>

</form>
@endsection
