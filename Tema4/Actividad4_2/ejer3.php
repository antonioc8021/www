<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require("conexion.php");
    $sql = "SELECT titulo, fecha, genero,numGoyas from pelicula WHERE fecha='2014'";
    if ($resultado = $conn->query($sql)) {
        while ($fila = $resultado->fetch()) {
            echo $fila["titulo"] . " - " . $fila["fecha"] . " - " . $fila["genero"] . " - " . $fila["numGoyas"];
        }
        echo "<br>";
        unset($conn);
    } else {
        echo "Error";
    }
    unset($resultado);
    ?>

</body>

</html>