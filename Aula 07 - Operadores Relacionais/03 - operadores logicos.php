<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<div id="interface">
			<?php 
				$ano = $_GET["an"];
				$idade = 2017 - $ano;
				echo "Quem nasceu em $ano tem idade de $idade anos";
				$tipo = ($idade>=18 && $idade<=65)?"OBRIGATORIO":"NAO OBRIGATORIO";
				echo "E dessa forma seu voto e $tipo";
			?>				
		</div>
	</body>
</html>