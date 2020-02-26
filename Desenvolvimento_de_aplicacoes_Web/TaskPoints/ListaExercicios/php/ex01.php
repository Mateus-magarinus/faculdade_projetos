

<html>
	<head>
		<title>Exercicio 01</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Ordenação de 5 numeros</h2>
		<form method="post" action="">
			<input type="number" name="num01"><br>
			<input type="number" name="num02"><br>
			<input type="number" name="num03"><br>
			<input type="number" name="num04"><br>
			<input type="number" name="num05">
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php
	if(isset($_POST['enviar'])){
		$numeros = [
			$_POST['num01'],
			$_POST['num02'],
			$_POST['num03'],
			$_POST['num04'],
			$_POST['num05']
		];

		
		sort($numeros);

		echo "Ordenados: ";
		print_r($numeros);


	}
?>