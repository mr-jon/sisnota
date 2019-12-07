@extends('layouts.app')

@section('title', 'Materias Lecionadas')

@section('titulo-pagina') Disciplinas Lecionadas @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-ms-auto">#</th>
			<th scope="col-ms-auto">Nome Prossor</th>
			<th scope="col-ms-auto">Turma</th>
			<th scope="col-ms-auto">Disciplina</th>
			<th scope="col-ms-auto">Opções</th>
			<th scope="col-ms-auto" >
				<a href="{{ url('/novo-lecionada') }}">
					<button type="button" class="btn btn-success">Nova</button>
				</a>
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php  foreach ($dados as $value){  ?> 
			<tr>
				<th scope="row">{{$value->id}}</th>
				<td>{{$value->professores->nome}}</td>
				<td>{{$value->turmas->nome_turma}}</td>
				<td>{{$value->disciplinas->nome_disciplina}}</td>
				<td class="col-sm-2">	
					<div class="row">
						<form method="POST" action="{{ URL::to('/edita-lecionada') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>

						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-lecionada') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>

		<?php  };  ?> 

	</tbody>
</table>
@endsection