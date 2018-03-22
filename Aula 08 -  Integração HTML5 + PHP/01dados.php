<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<?php
			$valor = $_GET["v"];
			$rq = sqrt($valor);
			echo "A raiz quadrada de $valor é " . number_format($rq,2);
		?>
		<br>
		<br>
		<a href="aula 08.php">Voltar</a>
	</body>
</html>