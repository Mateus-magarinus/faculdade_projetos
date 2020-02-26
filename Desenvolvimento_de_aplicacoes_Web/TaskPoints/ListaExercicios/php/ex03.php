
<html>
	<head>
		<title>Exercicio 03</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Abastecer</h2>
		<form method="post" action="">
			
			<p>Valor Gasolina</p><input type="number" name="num01" step="any"><br>
			<p>Valor Álcool</p><input type="number" name="num02" step="any"><br>
			
			
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php
	if(isset($_POST['enviar'])){
		
		$gasolina = $_POST['num01'];
		$alcool = $_POST['num02'];
		
		$media = $gasolina * 0.7;

		if($media > $alcool)
			echo "abasteça	com	álcool";
		else
			echo "abasteça com gasolina";

	}
?>