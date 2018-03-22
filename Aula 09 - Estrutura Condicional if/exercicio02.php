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
			if ($i < 16) {
				$tipoVoto = "não vota";
			}
			else {
				if (($i >= 16 && $i < 18) || ($i > 65)) {
					$tipoVoto = "voto opcional";
				}
				else {
					$tipoVoto = "voto obrigatorio";
				}
			}

			echo "Para essa idade, $tipoVoto";
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>