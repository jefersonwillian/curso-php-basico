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
				return $s;
			}

			$x = 3;
			$y = 4;
			$r = soma ($x, $y);
			echo "A soma entre $x e $y e igual $r";



			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>