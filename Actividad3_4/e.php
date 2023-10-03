<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $paises = [
        "España" => "Madrid",
        "Alemania" => "Berlin",
        "Italia" => "Roma",
        "Francia" => "Paris",
        "Portugal" => "Lisboa",
        "Suecia" => "Estocolmo"
    ];



    print_r($paises);


    print "<hr>" . $paises["Italia"] . "<br>";


    if (key_exists("Rusia", $paises)) {
        echo "<hr>existe<br>";
    } else {
        echo "<hr>no existe<br>";
    }


    echo "<hr>";
    foreach ($paises as $pais => $ciudad) {
        echo "$pais cuya capital es: $ciudad<br>";
    }



    unset($paises["Francia"]);

    echo "<hr> FRANCIA ELIMINADA, ARRIBA ESPAÑA<br>";

    foreach ($paises as $pais => $ciudad) {
        echo "$pais cuya capital es: $ciudad<br>";
    }

    echo "<hr>El país de Lisboa es: " . array_search("Lisboa", $paises);

    ?>
</body>

</html>