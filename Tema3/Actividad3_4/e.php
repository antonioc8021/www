<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $mapa = [
        "España" => "Madrid",
        "Alemania" => "Berlin",
        "Italia" => "Roma",
        "Francia" => "Paris",
        "Portugal" => "Lisboa",
        "Suecia" => "Estocolmo"
    ];



    print_r($mapa);


    print "<hr>" . $mapa["Italia"] . "<br>";


    if (key_exists("Rusia", $mapa)) {
        echo "<hr>existe<br>";
    } else {
        echo "<hr>no existe<br>";
    }


    echo "<hr>";
    foreach ($mapa as $pais => $ciudad) {
        echo "$pais cuya capital es: $ciudad<br>";
    }



    unset($mapa["Francia"]);

    echo "<hr>FRANCIA ELIMINADA, ARRIBA ESPAÑA, EEEEEEL BICHO EL MEYOR JUGADOR DEL PLANETA TIERRA<br>";

    foreach ($mapa as $pais => $ciudad) {
        echo "$pais cuya capital es: $ciudad<br>";
    }

    echo "<hr>El país de Lisboa es: " . array_search("Lisboa", $mapa);

    ?>
</body>

</html>