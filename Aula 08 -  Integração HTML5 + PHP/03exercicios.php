<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		
		<form method="get" action="03dados.php">
			<label for="txt">Texto:</label>
			<input type="text" name="t" id="txt"><br/>
			<label for="itam">Tamanho</label>
			<select name="tam" id="itam">
				<option value="8pt">8</option>
				<option value="10pt">10</option>
				<option value="14pt" selected>14</option>
				<option value="40pt">40</option>				
			</select><br>
			<label for="icor">Cor:</label>
			<input type="color" name="cor" id="icor"><br/>
			
			<input type="submit" value="Gerar">	
		</form>			
		
	</body>
</html>