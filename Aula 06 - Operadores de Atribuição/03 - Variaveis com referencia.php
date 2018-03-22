<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Operadores de Incremento</title>
	</head>
	<body> 
		<div id="interface">
			<?php 
				$a = 3;
				$b = &$a;
				$b += 5;
				echo "Mostre valor de A $a";	
				echo "<br/>Mostre valor de B $b";
			?>						
		</div>
	</body>
</html>