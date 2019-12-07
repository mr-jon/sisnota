@extends('layouts.app')

@section('title', 'Listagem dos Professores')

@section('titulo-pagina') Professor @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-ms-auto">#</th>
			<th scope="col-ms-auto">Nome</th>
			<th scope="col-ms-auto">CPF</th>
			<th scope="col-ms-auto">Opções</th>
			<th scope="col-ms-auto" >
				<a href="{{ url('/novo-professor') }}">
					<button type="button" class="btn btn-success">Novo professor</button>
				</a>
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
						<form method="POST" action="{{ URL::to('/edita-professor') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>

						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-professor') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>

		<?php  };  ?> 

	</tbody>
</table>
@endsection