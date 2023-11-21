<?php
require("conexion.php");
$codProducto = $_POST['codProducto'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <h1>MELÓN</h1>
    <?php
    echo $codProducto;
    ?>

</body>

</html>