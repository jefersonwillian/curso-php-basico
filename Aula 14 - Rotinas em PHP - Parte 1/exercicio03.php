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
				function soma () {
					$p = func_get_args();
					$t = func_num_args();
					$s = 0;
					for ($i=0; $i < $t; $i++) { 
						$s = $s + $p[$i];
					}
					return $s;
				}
				$r = soma (1,2,4,5,6,8,4,2,22323232);
				echo "A soma dos valores $r";
			?>
		</div>
		
	</body>
</html>