<?php
require("conexion.php");
$codProducto = $_POST['codProducto'];

$sql = "SELECT * FROM producto WHERE cod='$codProducto'";
$producto = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>MELÓN Y DE LOS GORDOS</h1>
    <?php
    // al tener un solo registro, si intento hacer un while al recorrer la segunda vuelta y ver que no puede almacenar nada casca,
    // si solo tenemos un registro sin while.
    $actualizaProducto = $producto->fetch();
    $producto = $actualizaProducto['cod'];
    $nombreCorto = $actualizaProducto['nombre_corto'];
    $nombre = $actualizaProducto['nombre'];
    $descripcion = $actualizaProducto['descripcion'];
    $pvp = $actualizaProducto['PVP'];
    echo $producto;
    echo $nombreCorto;

    ?>

</body>

</html>