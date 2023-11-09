<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Nombre de directorers y películas</h2>
    <?php
    require("conexion.php");
    $sql = "SELECT * FROM pelicula";
    if ($resultado = $conn->query($sql)) {
        $fila = $resultado->fetch();
        echo 'Número de películas: ' . $fila[0] . '<br><br>';
        unset($resultado);
    } else {
        echo 'Error';
    }
    unset($resultado);
    ?>

</body>

</html>