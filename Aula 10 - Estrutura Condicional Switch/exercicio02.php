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
			$n = isset($_GET["n1"])?$_GET["n1"]:0;
			switch ($n) {
				case 2:
				case 3:
				case 4:
				case 5:
				case 6:
					echo "Acorda, e vai estudar porraaaa";
					break;
				case 7:
				case 8:
					echo "Relaxam man, pode voltar a dormi, hoje não tem aula. Amém :)";
				
			}
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>