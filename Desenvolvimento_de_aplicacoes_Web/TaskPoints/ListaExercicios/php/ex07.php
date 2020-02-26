
<html>
	<head>
		<title>Exercicio 07</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Entre numeros</h2>
		<form method="post" action="">
			<input type="number" name="num01"><br>
			<input type="number" name="num02"><br>
			
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php
	if(isset($_POST['enviar'])){
		$numeros = [$_POST['num01'], $_POST['num02']];

		for ($i=$numeros[0]+1; $i < $numeros[1]; $i++) { 
			echo "$i ";
		}
		
	}
?>