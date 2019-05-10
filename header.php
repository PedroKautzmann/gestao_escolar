<!DOCTYPE html>
<html>
<head>
	<title>Escola Municipal</title>
	<meta charset="UTF-8">

	
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilo.css">

</head>

<body>
	<header>
		<div class="container">

			<div id="menu">
				<a href="?pagina=home">Início</a>
				<a href="?pagina=alunos">Alunos</a>
				<a href="?pagina=turmas">Turmas</a>
				<a href="?pagina=matriculas">Matrículas</a>
				<?php if(isset($_SESSION['login'])){ ?>
				<a href="logout.php">
					<?php echo $_SESSION['usuario']; ?> (sair)</a>
				<?php } ?>
			</div>
		</div>
	</header>

	<div id="conteudo" class="container">