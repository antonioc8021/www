<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pi = pi();
    $radio = 5;
    print($pi);
    echo '<br/>El area es: ' . $pi * pow($radio, 2) . '<br/>';
    echo 'El perímetro es: ' . 2 * $pi * $radio . '<br/>';
    echo 'El volumen de la esfera es: ' . (4 / 3 * $pi * pow($radio, 3));
    ?>

</body>

</html>