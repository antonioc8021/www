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

    print "<br>" . $paises["Italia"] . "<br>";

    if (key_exists("Rusia", $paises)) {
        echo "existe";
    } else {
        echo "no existe";
    }



    ?>
</body>

</html>