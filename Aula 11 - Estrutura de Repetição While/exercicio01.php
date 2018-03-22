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
			$c = 10;
			while ($c >= 1) {
				echo $c . "</br>";
				$c-=1;
			}
			?>
			<?php 
			$a = 1;
			while ($a <= 10) {
				echo $a . "</br>";
				$a+=1;
			}
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>