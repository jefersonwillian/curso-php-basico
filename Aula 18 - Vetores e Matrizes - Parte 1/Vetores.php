<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		<div id="interface">
			<pre>
                <?php
                    $n = array (3,10,60,40);
                    $n[]= 7;
                    print_r ($n);
                    echo "<br/>";
                ?>
            </pre>
            <pre>
                <?php
                    $c = range(5,20,2);
                    print_r ($c);
                    echo "<br/>";
                ?>
            </pre>
            <pre>
                <table border="1">
                <?php
                    $d = range(5,20,2);
                    foreach ($d as $v){
                        echo "<td>$v ";  
                    }
                       echo "<br/>";                
                ?>
                </table>
            </pre>
            <pre>
                <?php
                    $f = array ("nome" => "ana",
                               "idade" => 23,
                               "peso" => 65.5);
                    foreach ($f as $i => $o) {
                        echo "O campo $i possui o conteudo $o<br/>";
                    }
                ?>
            </pre>
	</body>
</html>