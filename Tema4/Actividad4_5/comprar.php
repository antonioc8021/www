<?php
include("conexion.php");
$sql = "SELECT * FROM vehiculo ORDER BY marca";
$resultado = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-content: center;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Comprar artículos</h1>

    <h2>Listado de Productos</h2>

    <table>
        <tr>
            <th>Matrícula</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>PVP</th>
            <th>Tipo</th>
            <th>Vendido</th>
        </tr>
        <?php
        foreach ($resultado as $coche) {
            ?>
            <tr>
                <td>
                    <?php print($coche['matricula']); ?>
                </td>
                <td>
                    <?php print($coche['marca']); ?>
                </td>
                <td>
                    <?php print($coche['descripcion']); ?>
                </td>
                <td>
                    <?php print($coche['PVP']); ?>
                </td>
                <td>
                    <?php print($coche['tipo']); ?>
                </td>
                <td>
                    <?php print($coche['vendido']); ?>
                </td>
            </tr>
            <?php
        }
        ?>

    </table>

</body>

</html>