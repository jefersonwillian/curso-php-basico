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
				$site = "Curso em Vídeo";
				$vetor = explode (" ", $site);
				print_r($vetor);

				echo "<br/>";

				$site1 = "Curso";
				$vetor1 = str_split ($site1);
				print_r($vetor1);
			?>
	</body>
</html>