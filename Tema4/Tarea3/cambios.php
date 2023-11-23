<?php
require("conexion.php");
$codProducto = $_POST['codProducto'];
$sql = "SELECT * FROM producto WHERE cod='$codProducto'";
$producto = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        span {
            font-size: 29px;
            font-weight: bold;
            padding-right: 20px;
        }

        textarea {
            width: max-content;
        }
    </style>
</head>

<body>
    <h1>MELÓN Y DE LOS GORDOS</h1>
    <?php
    // al tener un solo registro, si intento hacer un while al recorrer la segunda vuelta y ver que no puede almacenar nada casca,
    // si solo tenemos un registro sin while.
    // TODO: hacer un try catch específico de PDO por si se carga la página sin información que no muestre un error por cada varibale
    // TODO: la ñapa realmente no funcionaba como deberí
    $actualizaProducto = $producto->fetch();
    $producto = $actualizaProducto['cod'];
    $nombreCorto = $actualizaProducto['nombre_corto'];
    $nombre = $actualizaProducto['nombre'];
    $descripcion = $actualizaProducto['descripcion'];
    $pvp = $actualizaProducto['PVP'];
    ?>

    <form action="" method="post">
        <span>Producto: </span>
        <?php echo $producto ?><br>
        <p>Nombre corto:
            <input type="text" id="nombreCorto" name="nombreCorto" value="<?php echo $nombreCorto ?>"
                style="width: max-content;">
        </p>
        <p>Nombre: <textArea name="nombre" id="nombre"><?php echo $nombre ?></textArea></p>
        <p>Descripción: <textarea name="descripcion" id="descripcion"><?php echo $descripcion ?></textarea></p>
        <p>PVP: <input type="text" id="pvp" name="pvp" value="<?php echo $pvp ?>"></p>
        <p>
            <input type="submit" name="actualizar" id="actualizar" value="Actualizar">
            <input type="submit" name="cancelar" id="cancelar" value="Cancelar">
        </p>
    </form>
    <?php
    if (isset($_POST['actualizar'])) {
        // $query = "ALTER TABLE costo_cuotas ADD COLUMN '$campos' text NOT NULL";
        // pg_query();
    
        header("location: actualizar.php?");
        exit();
    }

    if (isset($_POST['cancelar'])) {

        header("location: cancelar.php?");
        exit();
    }
    ?>

</body>

</html>