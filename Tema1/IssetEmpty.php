<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $var = "null";
    // Se evalúa a true ya que $var está vacia
    if (empty($var)) {
        echo '$var es 0, cadena vacía, o no se encuentra definida en absoluto';
    }
    // Se evalúa como true ya que $var está definida
    if (isset($var))
        echo '$var está definida a pesar de que está vacía';
    else
        echo "NO EXISTE LA VARIABLE";
    ?>
</body>

</html>