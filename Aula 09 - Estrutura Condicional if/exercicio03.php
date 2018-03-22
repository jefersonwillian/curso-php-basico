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
			$n1 = $_GET["n1"];
			$n2 = $_GET["n2"];
			$media = ($n1 + $n2) / 2;
			echo "A média entre $n1 e $n2 é igual a ". number_format($media,2); 
			if ($media < 5) {
				$aluno = "REPROVADO";
			}
			else {
				if ($media >= 5 && $media < 6) {
					$aluno = "RECUPERAÇÃO";
				}
				else {
					$aluno = "APROVADO";
				}
			}
			echo "<br/>Situação do aluno: $aluno";
			?>
		</div>
		<a href="exercicio01.html">Voltar</a>
	</body>
</html>