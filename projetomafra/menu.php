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
				<li id="index"><a onclick="clique('index')" href="index.php">Home</a></li>
				<li id="cadastro"><a href="cadastro.php">Cadastro</a></li>
				<li id="agendamento"><a href="agendamento.php">Agendamento</a></li>
				<li id="servicos"><a href="servicos.php">Serviços</a></li>
			</ul>
		</nav>
	</div>
</div>

<?php
$url = $_SERVER['REQUEST_URI'];
$url2 = explode('/', $url);
$url_id = explode('.', $url2[3]);

?>

<script src='js/jquery-3.5.1.min.js'></script>
<script>

		var url = `<?=$url_id[0]?>`;
		console.log(url);
		$("#"+url).addClass('active');

</script>