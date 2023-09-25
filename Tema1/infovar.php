<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $entero = 5;
    $decimal = 5.5;
    $booleana = false;
    $string = 'Antonio';
    $array[] = [1, 2, 3, 4, 5, 6];
    echo 'Variable $entero= ' . var_dump($entero) . 'Número entero<br/>';
    echo 'Variable $decimal= ' . var_dump($decimal) . 'Número decimal<br/>';
    echo 'Variable $booleana= ' . var_dump($booleana) . 'Booleano<br/>';
    echo 'Variable $string= ' . var_dump($string) . 'Cadena de caracteres<br/>';
    echo 'Variable $array= ' . var_dump($array) . 'Array<br/>';

    ?>
</body>

</html>