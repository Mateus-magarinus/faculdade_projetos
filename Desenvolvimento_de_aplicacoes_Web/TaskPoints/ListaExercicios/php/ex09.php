<html>

<head>
    <title>Exercicio 09</title>
    <meta charset="utf-8">
</head>

<body>
    <h2>Gera combinações</h2>
    <form method="post" action="">
        <input type="text" name="palavra"><br>

        <br><br>
        <input type="submit" name="enviar" value="enviar">
    </form>
</body>

</html>



<?php

function gen_nos(&$set, &$results)
{
    for ($i = 0; $i < count($set); $i++) {
        $results[] = $set[$i];
        $tempset = $set;
        array_splice($tempset, $i, 1);
        $tempresults = array();
        gen_nos($tempset, $tempresults);
        foreach ($tempresults as $res) {
            $results[] = $set[$i] . $res;
        }
    }
}

if (isset($_POST['enviar'])) {
    $palavra = $_POST['palavra'];

    $results = array();
    $set = str_split($palavra);
    gen_nos($set, $results);

    $array = array();

    foreach ($results as $i => $v) {
        if(strlen($v) == strlen($palavra)) array_push($array, $v);
    }

    print_r($array);

}

?>