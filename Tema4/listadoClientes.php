<?php
include_once("conexion.php");
$sql = "SELECT * FROM cliente ORDER BY nif limit 10";
$result = $dwes->query($sql);
while ($row = $result->fetch()) {
    echo $row['nombre'] . ' - ' . $row['direccion'] . ' - ' . $row['telefono'] . '<br>';
}

unset($dwes);
?>