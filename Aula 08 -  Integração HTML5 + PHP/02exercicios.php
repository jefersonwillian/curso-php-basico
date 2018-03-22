<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="estilo.css"/>
		<title>Curos de PHP | Jeferson Carvalho	</title>
	</head>
	<body> 
		
		<form method="get" action="02dados.php">
			<label>Nome: <input type="text" name="nome"></label><br>
			<label>Ano de Nasc: <input type="number" name="ano"></label>
			<fieldset>
				<label>
					<input type="radio" name="sexo" id="masc" value="Homem" checked="">					
				Masculino </label><br>
				<label> <input type="radio" name="sexo" id="mulh" value="Mulher">Feminino</label>
			</fieldset>
			<input type="submit" value="Enviar">	
		</form>			
		
	</body>
</html>