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
			function soma ($a, $b) {
				$s = $a + $b;
				echo "<p>A soma vale $s</p>";
			}

			soma (3,4);
			soma (10, 55);

			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>