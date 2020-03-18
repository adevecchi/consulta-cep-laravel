<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Consultar CEP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
				<a href="/" class="navbar-brand d-flex align-items-center">
					<img src="/images/consultar-cep.png" style="height:3rem;">
				</a>
			</div>
		</div>
	</header>

	<main role="main">
		<section class="jumbotron pt-3 pb-3">
			<div class="container">
				<h1>Consulta CEP WebService SOAP dos Correios</h1>
			</div>
		</section>
        
        @yield('content')
	</main>

	<footer class="text-muted text-right mt-5">
		<hr>
		<div class="container">
			<p class="small">&copy; 2020 - Andre Devecchi</p>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="/js/main.js"></script>
    <script>
        ConsultarCep.init();
	</script>
</body>
</html>
