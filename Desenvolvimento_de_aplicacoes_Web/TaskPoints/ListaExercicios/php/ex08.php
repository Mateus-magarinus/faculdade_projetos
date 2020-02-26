
<html>
	<head>
		<title>Exercicio 08</title>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Conta letras de txt</h2>
		<form method="post" action="" enctype="multipart/form-data">
			<input type="file" name="arquivo" id="arquivo"><br><br>			
			
			<br><br>
			<input type="submit" name="enviar" value="enviar">
		</form>
	</body>
</html>



<?php

	function contaLetras($txt, $letra){
		$aux = 0;

		$aux += substr_count($txt, strtoupper($letra));
		$aux += substr_count($txt, strtolower($letra));

		return $aux;
	}

	if(isset($_POST['enviar'])){
		
		$array = file($_FILES["arquivo"]["tmp_name"]); 
		$texto = "";

		for ($i=0; $i < count($array); $i++) { 
			$texto .= $array[$i]; 
		}

		$alfabeto = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

		foreach ($alfabeto as $i => $v) {
			print_r($v . ' => ' . contaLetras($texto, $v) . '<br>');
		}
		
	}
?>