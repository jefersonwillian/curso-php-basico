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
				$t = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt risus libero, a ullamcorper lacus rutrum eu. Nam lobortis nunc diam, eu";
				$r = wordwrap ($t, 5, "<br/>\n", false);
				echo $r;

				echo "<br/>";

				$tam = strlen($t);
				echo $tam;
			?>
			
	</body>
</html>