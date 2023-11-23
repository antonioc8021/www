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
</head>

<body>
    <h1>Himalaya</h1>

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

</body>

</html>