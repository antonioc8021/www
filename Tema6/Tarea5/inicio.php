<?php
session_start();
// todo: todas las cosas que se hagan|consulten en la base de datos se debe de obtener a través de métodos realizados en el fichero BD.php
include_once "./conexion.php"; //ten cuidado porque la contraseña es con .
date_default_timezone_set('Europe/Madrid');
$sql = "SELECT MAX(numero) FROM pedido";
$numeroPedido = $conn->query($sql);

$row = $numeroPedido->fetch();

$numeroPedido = $row[0];
$numeroPedido++;

$formasPago = array('Contado', 'Master Card', 'VISA', 'American Express');
$horaActual = date("H:i:s");
$horaEntrega = date("H:i:s", strtotime($horaActual . " +40 minutes"));

?>

<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <h1 class="cabecera">SISTEMA DE SELECCION DE MENU ON-LINE</h1>
    <p>
        <?php echo "Numero de pedido: $numeroPedido" ?>
    </p>

    <form action="encargo.php" method="post">
        <p>Selecciona la forma de pago:
            <select name="formaPago" id="formaPago">
                <?php
                foreach ($formasPago as $forma) {
                    echo "<option value=\"$forma\">$forma</option>";
                }

                ?>
            </select>
        </p>
        <p>
            <?php
            echo "Hora de entrega: $horaEntrega";
            ?>
        </p>
        <p>Número de consumiciones <input type="number" name="num_consumiciones" id="num_consumiciones" required></p>
        <input type="submit" value="Elegir MENU" name="eligeMenu">
    </form>
</body>

</html>