<?php
session_start();
include_once "./DB.php"; //ten cuidado porque la contraseña es con .
date_default_timezone_set('Europe/Madrid');

$formasPago = array('Contado', 'Master Card', 'VISA', 'American Express');
$horaActual = date("H:i:s");
$horaEntrega = date("H:i:s", strtotime($horaActual . " +40 minutes"));
$_SESSION['horaEntrega'] = $horaEntrega;

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
        <?php numeroPedido() ?>
    </p>

    <form action="" method="post">
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
        <!-- En vez de validar con el PHP que esté relleno o no utilizo las herramientas que me da html ya que es más rápido y seguro de esta forma -->
        <p>Número de consumiciones <input type="number" name="num_consumiciones" id="num_consumiciones" required></p>
        <input type="submit" value="Elegir MENU" name="eligeMenu">
        <?php
        if (isset($_POST['eligeMenu'])) {
            $_SESSION['formasPago'] = $_POST['formaPago'];
            // mirar el GPT a ver que se cuenta, tienes que usarlo, todos los datos se deben de ser guardados en $_SESSION para poder usarlo en el resto de partes de la web
            header("");
        } else {
            echo "<p class=warning>A habido un error con la forma de pago!!!</p>";
        }
        ?>
    </form>
</body>

</html>