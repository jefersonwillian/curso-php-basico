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
				$p = "leite";
				$pr = 4;
				echo "o $p custa R". number_format($pr, 2);
				printf ("O %s esta custando R %.2f", $p, $pr);
			?>
	</body>
</html>