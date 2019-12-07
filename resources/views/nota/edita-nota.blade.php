@extends('layouts.app')


@section('title', 'Cadastro nota')

@section('content')
@section('titulo-pagina') Cadastro das notas @endsection
<link rel="stylesheet" type="text/css" href="/css/teste.css">
<form method="POST" action="{{ URL::to('/salva-nota') }}">
	<dir class="row">
		<div class="col">
			<input name="id_aluno" value="{{ $informacoes['aluno']->id }}" class="col-2" readonly>
			<label for="inputAddress">Aluno: {{ $informacoes['aluno']->nome }}</label>		
		</div>
		<div class="col">
			<input name="id_disciplina" value="{{ $informacoes['disciplina']->id }}" class="col-2" readonly>
			<label for="inputAddress">Disciplina: {{ $informacoes['disciplina']->nome_disciplina }}</label>
		</div>
		<div class="col">
			<label for="inputAddress">Ano letivo</label>
			<input name="ano_letivo" value="{{ $informacoes['ano_letivo'] }}" class="col-4" readonly>
		</div>
	</dir>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">1ª Nota</th>
				<th scope="col">1º Trabalho</th>
				<th scope="col">2ª Nota</th>
				<th scope="col">2º Trabalho</th>
				<th scope="col">Recuperação</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1º Bimestre</th>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->p_bim_1nota }}" name="p_bim_1nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->p_bim_1trab }}" name="p_bim_1trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->p_bim_2nota }}" name="p_bim_2nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->p_bim_2trab }}" name="p_bim_2trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->p_bim_recu }}" name="p_bim_recu"> </td>
			</tr>
			<tr>
				<th scope="row">2º Bimestre</th>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->s_bim_1nota }}" name="s_bim_1nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->s_bim_1trab }}" name="s_bim_1trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->s_bim_2nota }}" name="s_bim_2nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->s_bim_2trab }}" name="s_bim_2trab" ></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->s_bim_recu }}" name="s_bim_recu"> </td>
			</tr>
			<tr>
				<th scope="row">3º Bimestre</th>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->t_bim_1nota }}" name="t_bim_1nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->t_bim_1trab }}" name="t_bim_1trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->t_bim_2nota }}" name="t_bim_2nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->t_bim_2trab }}" name="t_bim_2trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->t_bim_recu }}" name="t_bim_recu"> </td>
			</tr>
			<tr>
				<th scope="row">4 Bimestre</th>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->q_bim_1nota }}" name="q_bim_1nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->q_bim_1trab }}" name="q_bim_1trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->q_bim_2nota }}" name="q_bim_2nota"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->q_bim_2trab }}" name="q_bim_2trab"></td>
				<td class="col-2" >
					<input type="text" class="form-control" value="{{ $notas->q_bim_recu }}" name="q_bim_recu"> </td>
			</tr>
		</tbody>
	</table>
	
	<dir class="row">
		<button type="submit" class="btn btn-primary">Salvar</button>
	</dir>
	
</form>
@endsection
