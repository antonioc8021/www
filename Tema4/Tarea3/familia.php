<?php
require("conexion.php");

//consigo los productos:
$sql = "SELECT * FROM producto";
$productos = $conn->query($sql);
$sql = "SELECT * FROM familia";
$familia = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familia de Productos</title>
</head>

<body>
    <div class="cabecera">
        <h1>Tarea: Listado de productos de una familia</h1>
        <span>Familia: </span>
        <select name="familia" id="familia">

        </select>
    </div>
</body>

</html>