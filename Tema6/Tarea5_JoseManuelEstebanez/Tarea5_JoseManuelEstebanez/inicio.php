<?php
require_once("./clases/conexion.php");

session_start();
if (isset($_SESSION["pizzasSeleccionadas"])) { 
    session_destroy();
    session_start();
}
function obtenerUltimoNumeroPedido()
{
    $sql = "SELECT MAX(numero) AS ultimo_numero FROM pedido;";
    $resultado = DB::ejecutaConsulta($sql);
    $fila = $resultado->fetch();
    return $fila['ultimo_numero'] ? $fila['ultimo_numero'] : 0;
}



function calcularHoraEntrega()
{
    return date('H:i', strtotime('+100 minutes'));
}


$ultimoNumeroPedido = obtenerUltimoNumeroPedido();
$formasPago = array("Contado", "Master Card", "VISA", "American Express");

$horaEntrega = calcularHoraEntrega();

if (isset($_POST["enviar"]) && trim($_POST["consumiciones"]!==""))
{
    $_SESSION["fPago"] = $_POST["formaPago"];
    $_SESSION["horaEntrega"] = $_POST["horaEntrega"];
    $_SESSION["consumiciones"] = $_POST["consumiciones"];
    header("Location: encargo.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>SISTEMA DE SELECCIÓN DE MENU ON-LINE</h1>
    <h2>Número de pedido:
        <?php echo $ultimoNumeroPedido + 1; ?>
    </h2>
    <form class="form1" action="" method="post">
        <p> <label>Forma de Pago:</label>
            <select name="formaPago">
                <?php
                foreach ($formasPago as $forma)
                {
                    echo "<option value='$forma'>$forma</option>";
                }
                ?>
            </select>
        </p>
        <p>
            <label>Hora de Entrega:</label>
            <input type="text" name="horaEntrega" value="<?php echo $horaEntrega; ?>" readonly>
        </p>
        <p>
            <label>Número de consumiciones:</label>
            <input type="number" class="consumiciones" name="consumiciones" min="1" max="10" value="1" step="1">
        </p>

        <input type="submit" name="enviar" value="Elegir MENU">
    </form>
</body>

</html>