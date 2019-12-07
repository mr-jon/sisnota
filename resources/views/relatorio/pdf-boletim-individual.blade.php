<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
	<div>
		<h3 class="text-center font-weight-bold mb-5">Notas do aluno {{$dados[0]->nome}}</h3>
	    <table class="table table-striped table-bordered">
	      <thead class="thead-dark">
	        <tr>
	          <th>Disciplina</th>
	          <th>1º Bimes</th>
	          <th>2º Bimes</th>
	          <th>3º Bimes</th>
	          <th>4º Bimes</th>
	        </tr>
	      </thead>
	      <tbody>
	        @for($i=0; $i < sizeof($dados) ;$i++)
	        <tr>
	 			<td>{{$dados[$i]->nome_disciplina}}</td>
	 			<td>
	 				{{($dados[$i]->p_bim_1nota+$dados[$i]->p_bim_2nota+$dados[$i]->p_bim_1trab+$dados[$i]->p_bim_2trab) / 4 }}
	 			</td>
	 			<td>
	 				{{($dados[$i]->s_bim_1nota+$dados[$i]->s_bim_2nota+$dados[$i]->s_bim_1trab+$dados[$i]->s_bim_2trab) / 4 }}
	 			</td>
	 			<td>
	 				{{($dados[$i]->t_bim_1nota+$dados[$i]->t_bim_2nota+$dados[$i]->t_bim_1trab+$dados[$i]->t_bim_2trab) / 4 }}
	 			</td>
	 			<td>
	 				{{($dados[$i]->q_bim_1nota+$dados[$i]->q_bim_2nota+$dados[$i]->q_bim_1trab+$dados[$i]->q_bim_2trab) / 4 }}
	 			</td>
	        </tr>
	        @endfor
	      </tbody>
	    </table>
	</div>
</body>