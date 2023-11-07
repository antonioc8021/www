<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // define is for declare any constant, you can use it for put inside any array or anything;
    define("PI", PI());

    function area($radio)
    {
        return PI * pow($radio, 2);
    }

    function volumen($radio)
    {
        return 4 / 3 * PI * pow($radio, 3);
    }

    function perimetro($radio)
    {
        return 2 * PI * $radio;
    }

    define("RADIO", 10);
    echo "El radio utilizado en todos los ejemplos es: " . RADIO . "<br>";
    echo "El área es: " . area(RADIO) . "<br>";
    echo "El volumen es: " . volumen(RADIO) . "<br>";
    echo "El perímetro es: " . perimetro(RADIO) . "<br>";
    ?>
</body>

</html>