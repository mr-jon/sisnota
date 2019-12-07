@extends('layouts.app')

@section('title', 'Boletim dos Alunos')

@section('titulo-pagina') Boletim dos Alunos @endsection

@section('content')
<form method="POST" action="{{URL::to('/gera-boletim-individual')}}">
	<div class="row">
		<div class="col-sm-3">
			<select name="ano_letivo">
				<option selected>Escolha um ano</option> 
				<option value="2015">2015</option> 
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
			</select>	
		</div>
		<div class="col-sm-3">
			<select name="id_aluno">
			<option selected>Escolha um aluno</option> 
			<?php  foreach ($dados as $key => $value){  ?>	
				<option value="{{$value->id}}">{{$value->nome}}</option> 
			<?php }; ?>
			</select> 
		</div>
		<div class="col-sm-3">
			<button type="submit" class="btn btn-primary">Gerar Boletim</button>
		</div>
	</div>
</form>
@endsection