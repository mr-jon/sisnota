@extends('layouts.app')

@section('title', 'Listagem dos Usuarios')

@section('titulo-pagina') Usuario @endsection

@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col-md-auto">ID</th>
			<th scope="col-md-auto">Nome</th>
			<th scope="col-md-auto">email</th>
			<th class="col col-lg-2">Opções</th>
			<th class="col col-lg-2" >
				<a href="{{ url('/novo-usuario') }}"><button type="button" class="btn btn btn-success">Novo usuario</button></a>
			</th>
		</tr>
	</thead>
	<tbody>
		<?php  foreach ($dados as $key => $value){  ?> 
			<tr>
				<th scope="row">{{$value->id}}</th>
				<td>{{$value->name}}</td>
				<td>{{$value->email}}</td>
				<td class="col-sm-2">	
					<div class="row">
						<form method="POST" action="{{ URL::to('/edita-usuario') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-secondary">Editar</button>
						</form>
						<form class="col-2"  method="POST" action="{{ URL::to('/apaga-usuario') }}">
							<button type="submit" name="id" value="{{$value->id}}" class="btn btn-danger">Excluir</button>
						</form>
					</div>	
				</td>
			</tr>

		<?php  };  ?> 

	</tbody>
</table>
@endsection