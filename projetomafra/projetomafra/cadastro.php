<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>Projeto de mafra</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	<script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel-noscript.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>

<body>

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Logo -->
			<div id="logo">
				<h1><a href="#">Golden Barbershop</a></h1>
				<span>A revolução do seu corte de cabelo</span>
			</div>

			<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li class="active"><a href="cadastro.html">Cadastro</a></li>
					<li><a href="agendamento.html">Agendamento</a></li>
					<li><a href="servicos.html">Serviços</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Main -->
	<div id="main">
		<div class="container h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<!-- Content -->
				<div id="formulario" class="8u skel-cell-important">
					<h1>Quero me Cadastrar</h1>
					<br></br>
					<form id="formCadastro" data-toggle="validate" role="form" action="cadastro_usu.php" method="POST">
						<div class="form-group">
							<label for="textNome" name= "nome" class="control-label">Nome</label>
							<input id="textNome" class="form-control" name="nome" placeholder="Digite seu Nome..." type="text">
						</div>
						<div class="form-group">
							<label for="textNome" name= "telefone" class="control-label">Telefone</label>
							<input id="textNome" class="form-control" name="telefone" placeholder="Digite seu Telefone..." type="text" onkeypress="$(this).mask('(00) 0000-00009')">
						</div>
						<div class="form-group"> <label for="inputEmail" name= "email" class="control-label">Email</label>
							<input id="inputEmail" class="form-control" name="email" placeholder="Digite seu E-mail" type="email">
						</div>
						<div class="form-group"> <label for="inputPassword" name= "senha" class="control-label">Senha</label>
							<input type="password" name="senha"class="form-control" id="inputPassword"
								placeholder="Digite sua Senha..."> </div>
						<div class="form-group"> <label for="inputConfirm" name= "confirmeasenha" class="control-label">Confirme a
								Senha</label>
							<input type="password" name="confirmeasenha" class="form-control" id="inputConfirm"
								placeholder="Confirme sua Senha..."> </div>
						<div class="checkbox">
							<label> <input required name="termos" type="checkbox"> Marque este item. </label>
						</div> 
						<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
						<button type="reset" class="btn btn-secondary btn-lg">Limpar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="4u">
					<section>
						<h2>Profissionais</h2>
						<ul class="default">
							<li><span class="lnr lnr-user"></span> Luiz Eduardo</li>
							<li><span class="lnr lnr-user"></span> Leandro Carvalho</li>
							<li><span class="lnr lnr-user"></span> Túlio da Rocha</li>
							<li><span class="lnr lnr-user"></span> Ezequiel de França</li>
						</ul>
					</section>
				</div>
				<div class="4u">
					<section>
						<h2>Redes Sociais</h2>
						<ul class="default">
							<li><a href="https://www.instagram.com/eduutorres/" target="_blank"><span
										class="lnr lnr-camera"></span> @eduutorres</a></li>
							<li><a href="https://www.instagram.com/29_carvalho/" target="_blank"><span
										class="lnr lnr-camera"></span> @29_carvalho</a></li>
							<li><a href="https://www.instagram.com/tuliiiorocha/" target="_blank"><span
										class="lnr lnr-camera"></span> @tuliiiorocha</a></li>
							<li><a href="https://www.instagram.com/ezequiel.junior/" target="_blank"><span
										class="lnr lnr-camera"></span> @ezequiel.junior</a></li>
						</ul>
					</section>
				</div>
				<div class="4u">
					<section>
						<h2>Endereço</h2>
						<ul class="default">
							<li><a href="https://www.google.com.br/maps/@-7.9950524,-34.8513787,15z"
									target="_blank"><span class="lnr lnr-map-marker"></span> Av. Do corte, 420 - Boa
									viagem - Recife</a></li>
							<li><span class="lnr lnr-clock"></span> Seg-Sex: 9h às 21h</li>
							<li><span class="lnr lnr-clock"></span> Sáb: 9h às 19h</li>
							<li><span class="lnr lnr-phone-handset"></span> Telefone: (81) 3322.4455</li>
							<li><a href="https://web.whatsapp.com/" target="_blank"><span class="lnr lnr-bubble"></span>
									WhatsApp: (81) 99988.0000</a></li>
						</ul>
					</section>
				</div>
			</div>
		</div>
	</div>

	<!-- Copyright -->
	<div id="copyright">
		<div class="container">
			Equipe: <a href="#">Rangers</a>
		</div>
	</div>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script>
		$(function () {
			$("#formCadastro").validate();
		}
		)
	</script>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
		integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>

</html>