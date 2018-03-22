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
			  	$totm = 0;
        		echo "Analizando o numero $n</br>";
       			echo "Valores multiplos:";
          		for($c=1;$c<=$n;$c++){
	              	if ($n%$c == 0){
	                   $valm = $c;
	                   $totm++;
	                   echo "$valm ";
	               	}
           		}
       		 	echo "<br/>Total de multiplos: $totm";
        		if ($totm == 2){
            	echo "<br/>Resultado $n é <a style='color: red'>Primo</a>";

        		}
       			else {
           		echo "<br/>Resultado de $n <a style='color: red'>Não é primo<a/>";
        		}
			?>
		</div>
		<a href="exercicio03.html">Voltar</a>
	</body>
</html>