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
                    $n = array ("A", "B", "C",);
                        echo "O vetor tem " . count($n) . " elementos ";
                        print_r($n);
                        echo "<br/>";
                        var_dump($n);
                ?>
            </pre>
            <pre>
                <?php 
                    $j = array ("A", "B", "C",);
                    print_r($j);
                    array_push($j, 9);
                    print_r($j);
                    array_pop($j);
                    var_dump($j);                     
                ?>
            </pre>
            <pre>
                <?php 
                    $j = array ("A", "B", "C",);
                    print_r($j);
                    array_unshift($j, 9);
                    print_r($j);
                    array_shift($j);
                    print_r($j);                     
                ?>
            </pre>
            <pre>
                <?php 
                    $j = array (1,9,4,10,6,22,3,15);
                    print_r($j);
                    sort($j);
                    print_r($j);
                ?>
            </pre>
            <pre>
                <?php 
                    $j = array (1,9,4,10,6,22,3,15);
                    print_r($j);
                    rsort($j);
                    print_r($j);
                ?>
            </pre>
            <pre>
                <?php 
                    $j = array (1,9,4,10,6,22,3,15);
                    var_dump($j);
                    asort($j);
                    var_dump($j);
                ?>
            </pre> 
        </div>
	</body>
</html>