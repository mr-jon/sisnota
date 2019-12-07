<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="jquery/jquery-3.3.1.slim.min.js"></script>
	<!-- JavaScript-->
	<script src="popper/popper.min.js"></script>
	<!-- JavaScript-->
	<script src="js/bootstrap.js"></script>

	<title>Sisnota - @yield('title')</title>
</head>
<body>
	<div class="bg-info">
		<div class="container">
			<input name="token" type="hidden" value="{{csrf_token()}}">
			<nav class="navbar navbar-expand-lg navbar-light px-0">
				<a class="navbar-brand" >SisNota</a>
				<div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(página atual)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Cadastro
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('/lista-aluno') }}">Aluno</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/lista-professor') }}">Professor</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/lista-lecionada') }}">Disciplinas Lecionadas</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/lista-disciplina') }}">Disciplina</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/lista-turma') }}">Turma</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Movimento
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ url('/lista-matricula') }}">Matrícula</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/filtro-busca-nota') }}">Lançamento de notas</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Relatórios
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="{{ url('/notas-turma') }}" 
								target="about_blank">Relatorio notas por turma</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="{{ url('/boletim-individual') }}"
								target="about_blank">Boletim Individual</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/lista-usuario') }}" role="button">
								Usuarios
							</a>
						</li>
					</ul>
					<span>Usuário: {{ Auth::user()->name }} | </span>
					<a class="text-dark" href="{{ url('/logout/')}}">&nbsp SAIR</a>
				</div>
			</nav>
		</div>
	</div>

	<div class="container text-center" >
		<div class="mt-5">
			<h1>@section('titulo-pagina') @show</h1><br/>
			@yield('content')
		</div>

		<footer class="fixed-bottom bg-light text-center">
			<p>SisNota. O seu sistema de nota</p>
		</footer>	
	</div>		

</body>

</html>