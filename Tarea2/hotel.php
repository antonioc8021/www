<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Hotel</title>
    <style>
        body {
            margin-left: 30%;
            margin-right: 30%;
        }

        .title {
            text-align: center;
        }

        legend {
            text-align: left;
        }

        .formulario {
            text-align: center;
            ;

        }
    </style>
</head>

<body>
    <h1 class="title">RESERVA DE HABITACIONES DE HOTEL</h1>
    <div class="form">
        <form action="./hotel.php" method="post" class="formulario">
            <fieldset>
                <legend>HOTEL</legend>
                <br>Nombre Cliente
                <input type="text" id="cliente" name="cliente"> <br><br>
                Dias
                <input type="number" id="dias" name="dias"> <br><br>
                Tipo de habitación:
                <select name="tipoHabitacion" id="tipoHabitacion">
                    <option value="elegir"></option>
                    <?php
                    $habitacion = ["SUITE", "FAMILIAR", "TRIPLE", "DOBLE", "INDIVIDUAL"];
                    foreach ($habitacion as $tipo) {
                        echo "<option value=$tipo>$tipo</option>";
                    }
                    ?>
                </select>
                <p>Extras:
                    <input type="checkbox" id="tenis" name="extras[]" value="tenis">Tenis</input>
                    <input type="checkbox" id="masaje" name="extras[]" value="masaje">Masaje</input>
                    <input type="checkbox" id="sauna" name="extras[]" value="sauna">Sauna</input>
                    <input type="checkbox" id="peluqueria" name="extras[]" value="peluqueria">Peluqueria</input>
                </p>
                <input type="reset" id="limpiar" value="Limpiar" name="limpiar" />
                <input type="submit" id="reservar" value="Reservar" name="reservar" />
            </fieldset>
        </form>
    </div>
    <?php
    if (isset($_POST["reservar"])) {
        // para sacar el texto de los inputs deberás de apuntar hacia el name no hacia el id,
        // el id se usa para css y JS
    
        if ((empty($_POST['cliente'])) || (empty($_POST['dias'])) || (empty($_POST['extras']))) {
            echo 'está vacío';
        } else {
            $cliente = $_POST['cliente'];
            $dias = $_POST['dias'];
            $extras = [];
            $extras = $_POST['extras'];
            $habitacion = $_POST['tipoHabitacion'];
        }

        function calculaPrecio($dias, $extras, $habitacion)
        {
            $precioBase = 100;
            $precioHabitacion = 0;
            $recargos = 0;
            if ($habitacion == 'SUITE') {
                $precioHabitacion += 60;
            } elseif ($habitacion == 'FAMILIAR') {
                $precioHabitacion += 40;
            } elseif ($habitacion == 'TRIPLE') {
                $precioHabitacion += 30;
            } elseif ($habitacion == 'DOBLE') {
                $precioHabitacion += 20;
            }

            foreach ($extras as $extras) {
                if (($extras == 'tenis') || ($extras == 'sauna')) {
                    $recargos += 10;
                } elseif (($extras == 'masaje') || ($extras == 'peluqueria')) {
                    $recargos += 15;
                }
            }
            return '(' . $precioBase . '+' . $precioHabitacion . '+' . $recargos . ')*' . $dias . '=' . ($precioBase + $precioHabitacion + $recargos);
        }

        // echo (mostrarDatos());
        $precioTotal = calculaPrecio($dias, $extras, $habitacion);
        echo (mostrarDatos($cliente, $dias, $extras, $habitacion, $precioTotal));
    }
    ?>
</body>

</html>
<?php
function mostrarDatos($cliente, $dias, $extras, $habitacion, $precioTotal, $precioBase = 100)
{
    ?>
    <fieldset>
        <legend>Factura</legend>
        <table>
            <tr>
                <td>Nombre: </td>
                <td>
                    <?php echo ($cliente) ?>
                </td>
            </tr>
            <tr>
                <td>Días: </td>
                <td>
                    <?php echo ($dias) ?>
                </td>
            </tr>
            <tr>
                <td>Precio base: </td>
                <td>
                    <?php echo ($precioBase) ?>€
                </td>
            </tr>
            <tr>
                <td>Tipo de habitacion: </td>
                <td>
                    <?php echo ($habitacion) ?>
                </td>
            </tr>
            <tr>
                <td>Extras: </td>
                <td>
                    <?php foreach ($extras as $extras) {
                        echo $extras . ' ';
                    } ?>
                </td>
            </tr>
            <tr>
                <td>Total: </td>
                <td>
                    <?php echo ($precioTotal) ?>€
                </td>
            </tr>
        </table>
    </fieldset>
    <?php
}
?>