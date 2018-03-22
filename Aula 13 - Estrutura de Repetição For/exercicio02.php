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
				$tab = isset($_GET["num"])?$_GET["num"]:0;
				for ($i=1; $i <= 100; $i++) { 
					$r = $tab * $i;
					echo "$tab x $i = $r <br/>";

				}
			?>
		</div>
		<a href="exercicio02 (2).php">Voltar</a>
	</body>
</html>