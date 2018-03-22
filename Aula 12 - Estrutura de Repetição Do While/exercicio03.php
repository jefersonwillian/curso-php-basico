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
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$n2 = 1;
			$n3 = 1;
			echo "<h1>Calculando a Tabuada do $n </h1>";
			do {
				$n3 = $n * $n2;
				$n2++;
				echo "<br>$n x $n2 = $n3";
			} while ($n2 <= 10);
			
			?>
		</div>
		<a href="exercicio03.html">Voltar</a>
	</body>
</html>