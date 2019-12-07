<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilizacao.css">
	<title>Sisnota - @yield('title')</title>
</head>
<body>

	<div class="container" id="conteudo">
		<br/><h1>@section('titulo-pagina') @show</h1><br/>
		@yield('content')
	</div>		
</body>
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="jquery/jquery-3.3.1.slim.min.js"></script>
	<!-- JavaScript-->
	<script src="popper/popper.min.js"></script>
	<!-- JavaScript-->
	<script src="js/bootstrap.js"></script>
</html>