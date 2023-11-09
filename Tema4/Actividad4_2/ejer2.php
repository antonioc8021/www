<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require("conexion.php");
    $sql = "SELECT titulo,fecha FROM pelicula ORDER BY fecha";
    if ($resultado = $conn->query($sql)) {
        while ($fila = $resultado->fetch()) {
            echo $fila["titulo"] . " - " . $fila["fecha"] . "<br>";
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