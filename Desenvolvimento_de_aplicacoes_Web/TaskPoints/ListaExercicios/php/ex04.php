
<html>
	<head>
		<title>Exercicio 04</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>IMC</h2>
		<form method="post" action="">
			<input type="number" name="num01" step="any"><br>
			<input type="radio" id="sexo" name="num02" value="1">Homem<br>
			<input type="radio" id="sexo" name="num02" value="2">Mulher<br>

			
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php
	if(isset($_POST['enviar'])){
		
		$a = $_POST['num01'];
		$sexo  = $_POST['num02'];
		
		if($sexo == 1){
			echo "Peso Ideal Homem: ";
			echo (72.7 * $a) - 58;
		}
		else{ 
			echo "Peso Ideal Mulher: ";
			echo (62.1 * $a) - 44;
		}


	}
?>