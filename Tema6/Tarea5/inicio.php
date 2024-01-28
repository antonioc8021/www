<?php
session_start();
include_once "./DB.php";
date_default_timezone_set('Europe/Madrid');

$formaPago = array('Contado', 'Master Card', 'VISA', 'American Express');
$horaActual = date("H:i:s");
$horaEntrega = date("H:i:s", strtotime($horaActual . " +40 minutes"));
$_SESSION['horaEntrega'] = $horaEntrega;

// Aquí deberías llamar a numeroPedido() y hacer algo con el resultado, por ejemplo, imprimirlo
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
        <?php echo numeroPedido(); ?>
    </p>

    <form action="" method="post">
        <p>Selecciona la forma de pago:
            <select name="formaPago" id="formaPago">
                <?php
                foreach ($formaPago as $forma) {
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
        <p>Número de consumiciones <input type="number" name="numConsumiciones" id="numConsumiciones" required></p>
        <input type="submit" value="Elegir MENU" name="eligeMenu">
    </form>

    <?php
    if (isset($_POST['eligeMenu'])) {
        $_SESSION['formaPago'] = $_POST['formaPago'];
        $_SESSION['numConsumiciones'] = $_POST['numConsumiciones'];
        // Reemplaza la URL en header("") con la página a la que deseas redirigir
        header("Location: encargo.php");
        exit(); // Asegura que el script se detenga después de la redirección
    }
    ?>
</body>

</html>