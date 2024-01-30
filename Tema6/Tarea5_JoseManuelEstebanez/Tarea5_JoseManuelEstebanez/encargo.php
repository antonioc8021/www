<?php
include("./clases/conexion.php");
include("./clases/pizzas.php");
include("./clases/seleccionadas.php");
session_start();

if (!isset($_SESSION["pizzasSeleccionadas"]) || !$_SESSION["pizzasSeleccionadas"] instanceof Seleccion) {
    $_SESSION["pizzasSeleccionadas"] = new Seleccion();
}

if (isset($_POST["limpiar"])) {
    $_SESSION["pizzasSeleccionadas"]->limpiarSeleccion();
}

$numPlatos = true;
if (isset($_POST["confirmar"])) {
    switch ($_SESSION["pizzasSeleccionadas"]->count()) {
        case 0:
            echo "<script>alert('No has seleccionado pizzas')</script>";
            break;
        case $_SESSION["consumiciones"]:
            header("Location: registro.php");
            break;
        default:
            echo "<script>alert('Seleccione " . $_SESSION["consumiciones"] . " platos')</script>";
            break;
    }
}

$sql = "SELECT * from pizza ORDER BY codigo;";
// se usan dos puntos porque está toda la clase con métodos estáticos pata no tener que crear un objeto de la clase DB, así que debo de poner el nombre de la clase (DB y dos puntos);
$consulta = DB::ejecutaConsulta($sql);
$pizzas = [];

while ($fila = $consulta->fetch()) {
    $pizza = new Pizza($fila["codigo"], $fila["descripcion"], $fila["precio"], $fila["tipo"], $fila["foto"]);
    $pizzas[] = $pizza;
}

if (isset($_POST["addPizza"])) {
    $codigoPizza = $_POST["addPizza"];
    $pizzaSeleccionada = null;

    foreach ($pizzas as $pizza) {
        if ($pizza->getCodigo() == $codigoPizza) {
            $pizzaSeleccionada = $pizza;
            break;
        }
    }

    if ($pizzaSeleccionada && !$_SESSION["pizzasSeleccionadas"]->contienePizza($pizzaSeleccionada)) {
        $_SESSION["pizzasSeleccionadas"]->agregarPizza($pizzaSeleccionada);
    } else {
        echo "<script>alert('La pizza " . $pizzaSeleccionada->getDescripcion() . " ya está seleccionada.');</script>";
    }
}

if (isset($_POST["removePizza"])) {
    $codigoPizza = $_POST["removePizza"];
    $_SESSION["pizzasSeleccionadas"]->eliminarPizza($codigoPizza);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Encargo de Pizzas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">

    <h1>CONFECCIÓN DEL MENÚ</h1>

    <ul class="lista">
        <?php
        if (isset($_SESSION["horaEntrega"]) && isset($_SESSION["fPago"])) {
            echo "<li> Hora de entrega: <span>" . $_SESSION["horaEntrega"] . " </span></li>";
            echo "<li> Forma de pago:  <span>" . $_SESSION["fPago"] . " </span></li>";
        } else {
            echo "Faltan datos, redirigiendo a la pagina de inicio";
            header("Refresh: 3; URL=inicio.php");
        }
        ?>
        <h2>Pizzas Seleccionadas</h2>

        <?php
        $cont = 0;
        $pizzasSeleccionadas = $_SESSION["pizzasSeleccionadas"]->getPizzas();
        if (isset($_SESSION["consumiciones"])) {
            $consumicionesFaltantes = max(0, $_SESSION["consumiciones"] - count($pizzasSeleccionadas));
            $pizzasExtras = max(0, count($pizzasSeleccionadas) - $_SESSION["consumiciones"]);

            foreach ($pizzasSeleccionadas as $pizza) {
                $cont++;
                echo "<li class='platos'> Plato" . $cont . " " . $pizza->getDescripcion() . " <form method='post' style='display: inline;'><input type='hidden' name='removePizza' value='" . $pizza->getCodigo() . "'><input type='submit' value='Quitar'></form></li>";
            }

            if ($consumicionesFaltantes > 0) {
                echo "<li class='platos rojo'> Faltan " . $consumicionesFaltantes . " consumiciones para completar el pedido</li>";
            }

            if ($pizzasExtras > 0) {
                echo "<li class='platos rojo'> Tienes " . $pizzasExtras . " pizza/s de más</li>";
            }
        }
        ?>
    </ul>
    <h1>Selecciona tus Pizzas</h1>

    <div class="pizzas-list" action="" method="post">
        <?php
        foreach ($pizzas as $pizza) {
            ?>
            <div class="pizza-item">
                <img src="./img/<?php echo $pizza->getFoto(); ?>.png" alt="<?php echo $pizza->getDescripcion(); ?>">
                <p>
                    <?php echo $pizza->getDescripcion() ?>
                </p>f
                <form class="formu" action="" method="post">
                    <input type="hidden" name="addPizza" value="<?php echo $pizza->getCodigo(); ?>">
                    <input class="aniadir" type="submit" value="Añadir">
                </form>
            </div>
            <?php
        }
        ?>
    </div>
    <div class="form2">
        <form action="inicio.php" method="post">
            <input type="submit" value="Anterior">
        </form>
        <form action="" method="post">
            <input type="submit" value="Limpiar" name="limpiar">
        </form>

        <form action="" method="post">
            <input type="submit" name="confirmar" value="Confirmar">
        </form>
    </div>
</body>

</html>