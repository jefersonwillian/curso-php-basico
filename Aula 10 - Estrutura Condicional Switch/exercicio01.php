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
			$n = isset($_GET["num"])?$_GET["num"]:0;
			$o = isset($_GET["oper"])?$_GET["oper"]:1;
			switch ($o) {
				case 1:
					$r = $n * 2;
					break;				
				case 2:
					$r = $n ^ 3;
					break;
				case 3:
					$r = sqrt($n);
			}
			echo "O calculo da operção solicitada é $r";
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>