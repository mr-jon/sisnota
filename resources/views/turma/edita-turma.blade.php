@extends('layouts.app')

@section('title', 'Editando Turma')

@section('content')

@section('titulo-pagina')Cadastro da Turma @endsection

@section('content')
<form method="POST" action="{{ URL::to('/atualiza-turma') }}">
	<div class="row">
		<div class="col-1">
			<label>ID</label>
			<input name="id" type="text" value="{{$dados->id}}" class="form-control"  readonly>
		</div>
		<div class="col-2">
			<label>Nome da turma</label>
			<input name="nome_turma" value="{{$dados->nome_turma}}" type="text" class="form-control">
		</div>
	</div>
	<div class="row" >
		<div class="col-4" style="margin-top:10px">
			<button type="submit" class="btn btn-primary">Salvar</button>
		</div>
	</div>	

</form>
@endsection
