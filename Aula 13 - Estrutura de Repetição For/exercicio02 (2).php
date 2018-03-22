<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<div id="interface">
			<form method="get" action="exercicio02.php">
   				<select name="num"> 
   					<?php 
   						for ($i=1; $i <= 100; $i++) { 
   							echo "<option> $i </option>";
   						}
   					?>
   				</select>
  				<input type="submit" value="Tabuada"/>
			</form>
		</div>
	</body>
</html>