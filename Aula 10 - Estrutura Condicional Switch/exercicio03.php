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
			$estado = isset($_GET["estado"])?$_GET["estado"]:0;
			switch ($estado) {
				case 1:
				echo "Você mora na região Norte do Brasil";
				break;
				case 2:
				echo "Você mora na região Nordeste do Brasil";
				break;
				case 3:
				echo "Você mora na região Centro-Oeste do Brasil";
				break;
				case 4:
				echo "Você mora na região Sudeste do Brasil";
				break;
				case 5:
				echo "Você mora na região Sul do brasil";
				break;
				default:
				echo "Escolha um estado falido";
			}
			?>
		</div>
		<a href="exercicio03.html">Voltar</a>
	</body>
</html>