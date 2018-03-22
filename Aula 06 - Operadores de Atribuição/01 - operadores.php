<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/estilo.css"/>
		<title>Operadores de Atribuição</title>
	</head>
	<body> 
		<div id="interface">
			<?php 
				$preco =  $_GET["p"];
				echo "O preco do produto e R$" . number_format($preco, 2);
				$preco = $preco + ($preco*10/100);
				echo "<br/>E novo preco com 10% de aumento sera R$". number_format($preco, 2);
				
			?>						
		</div>
	</body>
</html>