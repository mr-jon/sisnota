@extends('layouts.app')

@section('title', 'Listagem dos Alunos')

@section('titulo-pagina') Aluno @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-md-auto">ID</th>
			<th scope="col-md-auto">Nome completpo</th>
			<th scope="col-md-auto">CPF</th>
			<th class="col col-lg-2">Opções</th>
			<th class="col col-lg-2" >
				<a href="{{ url('/novo-aluno') }}"><button type="button" class="btn btn btn-success">Novo aluno</button></a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php  foreach ($dados as $key => $value){  ?> 
			<tr>
				<th scope="row">{{$value->id}}</th>
				<td>{{$value->nome}}</td>
				<td>{{$value->cpf}}</td>
				<td class="col-sm-2">	
					<div class="row">
						<form method="POST" action="{{ URL::to('/edita-aluno') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>
						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-aluno') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>

		<?php  };  ?> 

	</tbody>
</table>
@endsection