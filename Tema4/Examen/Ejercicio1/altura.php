<?php
require('conectar.php');
include_once 'mensaje.php';

$sql = "SELECT * FROM pico";
$picos = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altura</title>
    <link rel="stylesheet" href="dwes.css">
    <style>
        table,
        th,
        tr,
        td {
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <div id="encabezado">
        <h1>Altura</h1>
    </div>
    <div id="contenido">
        <h3>Picos ochomiles</h3>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Altura</th>
            </tr>

            <?php while ($alturaPicos = $picos->fetch()) {
                $nombre = $alturaPicos['nombre'];
                $altura = $alturaPicos['altura']; ?>
                <tr>
                    <td>
                        <?php echo $nombre ?>
                    </td>
                    <td>
                        <?php mensaje($altura) ?>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
</body>

</html>