<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function interesSimple($capital, $interes, $anos)
    {
        return $capital * $interes * $anos;
    }

    function interesCompuesto($capital, $interes, $anos)
    {
        return $capital * pow((1 + $interes), $anos) - $capital;
    }

    function comparar($capital, $interes, $anos)
    {
        $simple = interesSimple($capital, $interes, $anos);
        $compuesto = interesCompuesto($capital, $interes, $anos);
        if ($simple < $compuesto) {
            return "Sale mejor la simple: $simple, que la compuesta: $compuesto";
        } else if ($simple > $compuesto) {
            return "Sale mejor la compuesta: $compuesto, que la simple: $simple";
        } else {
            return "Te sale igual socio así que a por al compuesta y a especular; el valor es de:" . $compuesto;
        }
    }
    echo comparar(100000, 4, 10);
    ?>
</body>

</html>