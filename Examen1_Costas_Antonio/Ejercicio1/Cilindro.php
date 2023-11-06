<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    const PI = 3.1415926535898;

    function volumen_cilindro($h, $r = 5)
    {
        $esPositivo = false;
        if (($h >= 0) && ($r >= 0)) {
            $esPositivo = true;
        }

        if ($esPositivo) {
            return "Su volumen es: " . (PI * pow($r, 2) * $h);
        } else {
            return "Los valores introducidos tienen que ser positivos.";
        }

    }

    echo volumen_cilindro(10, 2) . '<br>';
    echo volumen_cilindro(3) . '<br>';
    echo volumen_cilindro(-1) . '<br>';
    ?>
</body>

</html>