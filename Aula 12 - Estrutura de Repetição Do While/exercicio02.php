<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<div id="interface">
			<?php 
			$val = isset($_GET["val"])?$_GET["val"]:0;
			$c = $val;
			$fat = 1;
			do {
				$fat = $fat * $c;
				$c -= 1;
			} while ($c >= 1);
			echo "<h2> $val ! = $fat </h2>";
			?>
		</div>
		<a href="exercicio02.html">Voltar</a>
	</body>
</html>