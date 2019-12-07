<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center font-weight-bold mb-5">Notas dos alunos</h1>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th>Aluno</th>
          <th>1º Bimes</th>
          <th>2º Bimes</th>
          <th>3º Bimes</th>
          <th>4º Bimes</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notas as $nota)
          <tr>
            <td>{{ $nota->aluno['nome'] }}</td>
            <td>{{ $nota->p_bim_1nota + $nota->p_bim_2nota + $nota->p_bim_1trab + $nota->p_bim_2trab / 4}}</td>
            <td>{{ $nota->s_bim_1nota + $nota->s_bim_2nota + $nota->s_bim_1trab + $nota->s_bim_2trab / 4}}</td>
            <td>{{ $nota->t_bim_1nota + $nota->t_bim_2nota + $nota->t_bim_1trab + $nota->t_bim_2trab / 4}}</td>
            <td>{{ $nota->q_bim_1nota + $nota->q_bim_2nota + $nota->q_bim_1trab + $nota->q_bim_2trab / 4}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
  </body>
</html>
