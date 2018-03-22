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
			for ($i=1; $i <= 10 ; $i++) { 
				echo "$i ";
			}
			echo "<br>";
			 for ($e=10; $e >= 1; $e--) {
			 	echo "$e " ;
			 }
			 echo "<br/>";
			 for ($i=5; $i <= 50; $i += 5) {
			 	echo "$i ";
			 }
			 echo "<br/>";
			 for ($i=40; $i >= 0; $i -= 2) {
			 	print("$i ");
			 }
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>