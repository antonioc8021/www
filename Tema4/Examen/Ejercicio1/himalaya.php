<?php
require("conectar.php");
$sql = "SELECT * FROM pico ORDER BY altura DESC;";
$picos = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himalaya</title>
    <link rel="stylesheet" href="dwes.css">
</head>

<body>
    <div id="encabezado">
        <h1>Himalaya</h1>
    </div>
    <div id="contenido">
        <h3>Picos del himalaya</h3>
        <ol>
            <?php
            while ($picosOrdenados = $picos->fetch()) {
                ?>
                <li>
                    <?php echo 'Pico: ' . $picosOrdenados['nombre'] . ', Altura: ' . $picosOrdenados['altura'] ?>
                </li>
                <?php
            }
            ?>
        </ol>
    </div>
</body>

</html>