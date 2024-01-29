<?php
include("./clases/conexion.php");
include("./clases/pizzas.php");
include("./clases/seleccionadas.php");

session_start();
if (isset($_SESSION["horaEntrega"]) && isset($_SESSION["fPago"]))
{
    $fPago = $_SESSION["fPago"];
    $horaEntrega = $_SESSION["horaEntrega"];
}
else
{
    echo "Faltan datos, redirigiendo a la pagina de inicio";
    header("Refresh: 3; URL=inicio.php");
}

$precioTotal = importe();
$idPedido = numeroInsertar();
if (isset($_POST["pagar"]))
{
    DB::preparada($idPedido, $fPago, $horaEntrega, $precioTotal);
}

function numeroInsertar()
{
    $sql = "SELECT count(*) from pedido;";
    $consulta = DB::ejecutaConsulta($sql);

    $fila = $consulta->fetch();
    $numeroDesignado = $fila[0];
    return ($numeroDesignado + 1);
}

function importe()
{
    $precioTotal = 0;
    if (isset($_SESSION["pizzasSeleccionadas"]))
    {
        foreach ($_SESSION["pizzasSeleccionadas"]->getPizzas() as $pizza)
        {
            $precioTotal += $pizza->getPrecio();
        }
    }
    return $precioTotal;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>MENU ON-LINE (Resumen de pedido)</h1>
    <div class=container>
        <div class="lista2">
            <ul>
                <?php
                if (isset($_SESSION["horaEntrega"]) && isset($_SESSION["fPago"]))
                {
                    echo "<li> Hora de entrega: <span>" . $_SESSION["horaEntrega"] . " </span></li>";
                    echo "<li> Forma de pago:  <span>" . $_SESSION["fPago"] . " </span></li>";
                }
                else
                {
                    echo "Faltan datos, redirigiendo a la pagina de inicio";
                    header("Refresh: 3; URL=inicio.php");
                }
                ?>
            </ul>
            <ul>
                <?php
                if (isset($_SESSION["pizzasSeleccionadas"]))
                {
                    echo "<li> Numero de platos a pagar:  <span>" . $_SESSION["pizzasSeleccionadas"]->count() . " </span></li>";
                    echo "<li>Importe: <span>$precioTotal</span> €";
                }
                ?>
            </ul>

            <ul class="ultimaLista">
                <h3>Platos seleccionados:</h3>
                <div class="pSelec">
                    <?php
                    if (isset($_SESSION["pizzasSeleccionadas"]))
                    {
                        foreach ($_SESSION["pizzasSeleccionadas"]->getPizzas() as $pizza)
                        {
                            echo "<li class='platos2'><span>" . $pizza->getDescripcion() . "</span><img class='imagen' src='./img/{$pizza->getFoto()}.png'>" . "</li>";
                        }
                    }
                    ?>
                </div>
            </ul>
        </div>
        <div class="botones">
            <form action="" method="post">
                <input type="submit" value="Modificar" formaction="encargo.php">
                <input type="submit" name="pagar" value="Pagar">
            </form>
        </div>
    </div>


</body>

</html>