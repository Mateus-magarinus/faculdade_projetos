
<html>
	<head>
		<title>Exercicio 02</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Média Aritmética</h2>
		<form method="post" action="">
			<input type="number" name="num01"><br>
			<input type="number" name="num02"><br>
			<input type="number" name="num03"><br>
			<input type="number" name="num04"><br>
			
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
			$_POST['num04']
		];

		$media = 0;

		foreach ($numeros as $n => $v) {
			$media += $v;
		}
		 
		$media = $media / 4;

		echo "Media: $media <br>";

		if($media >= 7)
			echo "Aluno aprovado";
		else if($media >= 5 && $media < 7)
			echo "Aluno em recuperação";
		else if($media < 5)
			echo "Aluno reprovado";


	}
?>