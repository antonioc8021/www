<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Plantilla</title>

</head>

<body>
    <?php
    require_once('coche.php');
    $coche = new Coche(20, "8281-GML");
    echo $coche->mostrar();

    ?>
</body>

</html>