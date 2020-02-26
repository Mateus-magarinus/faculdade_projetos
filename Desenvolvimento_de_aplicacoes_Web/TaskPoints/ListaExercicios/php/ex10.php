<html>

<head>
    <title>Exercicio 10</title>
    <meta charset="utf-8">
</head>

<body>
    <h2>Inverte Números</h2>
    <form method="post" action="">
        <input type="text" name="palavra"><br>

        <br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>

</html>



<?php

if (isset($_POST['enviar'])) {
    print_r($_POST['palavra'] . ' => ' . strrev($_POST['palavra']));
}

?>