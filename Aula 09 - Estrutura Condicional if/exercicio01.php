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
			$a = isset($_GET["ano"])?$_GET["ano"]:1900;
			$i = date("Y") - $a;
			echo "Voce nasceu em $a e tem $i anos<br/>";
			if ($i >= 18) {
				$v = "ja pode votar";
				$d = "ja pode dirigir";
			}
			else {
				$v = "não pode votar";
				$d = "não pode dirigir";
			}

			echo "Com essa idade voce $v e tambem $d";
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>