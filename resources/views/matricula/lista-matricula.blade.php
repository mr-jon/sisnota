@extends('layouts.app')

@section('title', 'Listagem das Matriculas')

@section('titulo-pagina') Matricula @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-md-auto">#</th>
			<th scope="col-md-auto">Aluno</th>
			<th scope="col-md-auto">Ano letivo da matricula</th>
			<th class="col col-lg-2" >
				<a href="{{ url('/novo-matricula') }}"><button type="button" class="btn btn btn-success">Nova Matricula</button></a>
			</th>
		</tr>
	</thead>
	<tbody>

		<?php  foreach ($dados as $value){  ?> 
			<tr>
				<th scope="row">{{$value->id}}</th>
				<td>{{$value->alunos->nome}}</td>
				<td>{{$value->data_matricula}}</td>
				<td class="col-sm-2">	
					<div class="row">
						<form method="POST" action="{{ URL::to('/edita-matricula') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>

						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-matricula') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>
		<?php  };  ?> 

	</tbody>
</table>
@endsection