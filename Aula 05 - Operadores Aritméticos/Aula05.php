<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="css/estilo.css"/>
		<title></title>
	</head>
	<body> 
		<div id="interface">
			<?php 
				$n1 = 10;
				$n2 = 3;
				$s = $n1 + $n2;
				echo "<br/>A soma vale $s";

				$n1 = 39;
				$n2 = 3;
				$s = $n1 - $n2;
				echo "<br/>A subtracao vale $s";

				$n1 = 20;
				$n2 = 3;
				$s = $n1 * $n2;
				echo "<br/>A multiplicacao vale $s";

				$n1 = 18;
				$n2 = 3;
				$s = $n1 / $n2;
				echo "<br/>A divisao vale $s";

				$n1 = 65;
				$n2 = 3;
				$s = $n1 % $n2;
				echo "<br/>A modulo vale $s";

			?>	
			<?php 
				
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$s = $n1 + $n2;
				echo "<br/>A soma vale $s";

				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$s = $n1 - $n2;
				echo "<br/>A subtracao vale $s";

				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$s = $n1 * $n2;
				echo "<br/>A multiplicacao vale $s";

				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$s = $n1 / $n2;
				echo "<br/>A divisao vale $s";

				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$s = $n1 % $n2;
				echo "<br/>A modulo vale $s";

			?>	
		</div>
	</body>
</html>