<?php
session_start();
// esta es la forma correcta de poder acceder a la variable de sesión.
$horaEntrega = $_SESSION['horaEntrega'];
$formaPago = $_SESSION['formaPago'];
$numConsumiciones = $_SESSION['numConsumiciones'];
$platosSeleccionados;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encargo</title>
</head>

<body>
    <h1>CONFECCIÓN DEL MENÚ: Selección de pizzas</h1>
    <p>
        <?php echo "Hora de entrega: $horaEntrega"; ?>
    </p>
    <p>
        <?php echo "Forma de pago: $formaPago"; ?>
    </p>
    <!-- aquí meto los articulos que se seleccionan-->


    <!-- aquí hago un formulario con la seleccion de pizzas y los botones -->
    <form action="./registro.php">

    </form>





</body>

</html>