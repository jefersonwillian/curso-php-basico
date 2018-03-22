<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<?php 
			$texto = isset($_GET["t"])?$_GET["t"]:"Texto não informado";
			$tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
			$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
		?>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
		<style>
			span.texto {
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>
	<body> 
		<?php
			echo "<span class='texto'> $texto </span>";
		?>
		<br>
		<br>
		<a href="03exercicios.php">Voltar</a>
	</body>
</html>