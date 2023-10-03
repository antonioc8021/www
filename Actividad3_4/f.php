<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function numero($arrayNumeros, $numeroLimite)
    {
        $nuevoArray = [];
        for ($i = 0; $i < $numeroLimite; $i++) {
            $nuevoArray[$i] = $arrayNumeros[$i];
        }
        foreach ($nuevoArray as $posicion => $numeros) {
            echo "Posición:" . ($posicion + 1) . "=> $numeros<br>";
        }
    }

    $numeros = [24, 25, 29, 10, 40, 342, 129, 249, 345, 43, 253];
    echo "ARRAY SIN TOCAR<br>";
    foreach ($numeros as $posicion => $numero) {
        echo "Posición:" . ($posicion + 1) . "=> $numero<br>";
    }

    echo "<hr>";

    echo "ARRAY TUNEADO LOCO<br>";
    echo numero($numeros, 9);


    ?>
</body>

</html>