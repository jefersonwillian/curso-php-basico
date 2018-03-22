<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<?php
			$nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
			$ano = isset($_GET["ano"])?$_GET["ano"]:0;
			$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
			$idade = date("Y") - $ano;
			echo "$nome e $sexo e tem $idade anos";
		?>
		<br>
		<br>
		<a href="02exercicios.php">Voltar</a>
	</body>
</html>