@extends('layouts.app')

@section('title', 'Listagem das Turmas')

@section('titulo-pagina') Turma @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-md-auto">#</th>
			<th scope="col-md-auto">Turma</th>
			<th class="col col-lg-2">Opções</th>
			<th class="col col-lg-2">
				<a href="{{ url('/novo-turma') }}">
					<button type="button" class="btn btn btn-success">Nova Turma</button>
				</a>
			</th>
		</tr>
	</thead>
	<tbody>

		<?php  foreach ($dados as $key => $value){  ?> 
			<tr>
				<th scope="row">{{$value->id}}</th>
				<td>{{$value->nome_turma}}</td>
				<td class="col-sm-2">	
					<div class="row">
						<form method="POST" action="{{ URL::to('/edita-turma') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>
						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-turma') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>

		<?php  };  ?> 

	</tbody>
</table>
@endsection