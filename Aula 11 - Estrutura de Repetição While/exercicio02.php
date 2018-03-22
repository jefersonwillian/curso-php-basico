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
				$v1 = isset($_GET["v1"])?$_GET["v1"]:0;
				$v2 = isset($_GET["v2"])?$_GET["v2"]:0;
				$incr = isset($_GET["incr"])?$_GET["incr"]:0;
								
				if ($v1 < $v2) {
					while ($v1 <= $v2) {
						echo $v1 . "<br/>";
						$v1 += $incr;
					}
				}
					else {
						while ($v1 >= $v2) {
							echo $v1 . "<br/>";
							$v1 -= $incr;
						}
					}
				
			?>
		</div>
		<a href="exercicio02.html">Voltar</a>
	</body>
</html>