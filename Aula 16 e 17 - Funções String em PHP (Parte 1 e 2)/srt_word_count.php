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
				$t = "Olá mundo lindo que eu amo";
				$count = str_word_count($t, 1);
				print_r($count);
			?>
	</body>
</html>