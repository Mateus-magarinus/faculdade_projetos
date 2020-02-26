
<html>
	<head>
		<title>Exercicio 06</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Numeros</h2>
		<form method="post" action="">
			<input type="number" name="num01"><br>
			
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php
	if(isset($_POST['enviar'])){
		$numero = $_POST['num01'];
		$fat=1;
		for ($i=1; $i <= $numero; $i++) { 
			$fat *= $i;
		}
		echo "Fatorial de $numero é $fat";
	}
?>