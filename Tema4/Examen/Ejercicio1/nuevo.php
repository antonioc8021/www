<?php
require('conectar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dwes.css">
</head>

<body>
    <div id="encabezdo">
        <h1>Nuevo Pico</h1>
    </div>
    <div id="contenido">
        <h3>Insertar un nuevo pico</h3>
        <form action="" method="post">
            <p>Orden: <input type="number" name="orden" id="orden"></p>
            <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
            <p>Altura: <input type="number" name="altura" id="altura"></p>
            <input type="submit" value="Insertar" name="insertar" id="insertar">
        </form>
        <?php
        if (isset($_POST['insertar'])) {
            if (empty($_POST['orden']) || empty($_POST['nombre']) || empty($_POST['altura'])) {
                echo 'Se deben de rellenar los tres campos';
            } else {
                $orden = $_POST['orden'];
                $nombre = $_POST['nombre'];
                $altura = $_POST['altura'];
                if (strlen($orden) > 2 || strlen($nombre) > 30 || $altura < 8000) {
                    echo 'El orden debe de tener 1 o 2 caracteres, el nombre menos de 30 caracteres, y la altura ser igual o mayor a 8000.';
                } else {
                    try {
                        $sql = "INSERT INTO pico (orden, nombre, altura) VALUES (:orden, :nombre, :altura)";
                        $stmt = $conn->prepare($sql);
                        $stmt->bindParam(':orden', $orden, PDO::PARAM_INT);
                        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                        $stmt->bindParam(':altura', $altura, PDO::PARAM_INT);
                        $stmt->execute();
                        echo 'Datos insertados correctamente.';
                    } catch (PDOException $e) {
                        echo 'Error al insertar datos: ' . $e->getMessage();
                    }
                }
            }
        }
        ?>
    </div>
</body>

</html>