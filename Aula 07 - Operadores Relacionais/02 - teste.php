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
				$nota1 = $_GET["n1"];
				$nota2 = $_GET["n2"];
				$m = ($nota1+$nota2)/2;
				echo "A media entre $n1 e $nota2 e $m <br/>";
				echo "A situacao do aluno e ". (($m<6)?"REPROVADO":"APROVADO");
			?>				
		</div>
	</body>
</html>