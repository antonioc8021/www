<?php
include_once("conexion.php");
$sql = "SELECT nombre, precio, descripcion from producto order by nombre";
$result = $dwes->query($sql);
while ($row = $result->fetch()) {
    echo $row["nombre"] . " - " . $row["precio"] . " - " . $row["descripcion"] . '<br>';
}
?>