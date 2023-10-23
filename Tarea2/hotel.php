<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Hotel</title>
    <style>
        .title {
            text-align: center;
        }

        legend {
            text-align: left;
        }

        .formulario {
            text-align: center;
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
                    <input type="checkbox" id="peluquería" name="extras[]" value="peluqueria">Peluquería</input>
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
            echo 'tamos bien';
            $cliente = $_POST['cliente'];
            $dias = $_POST['dias'];
            $extras = $_POST['extras'];
            $habitacion = $_POST['tipoHabitacion'];
        }

        function calculaPrecio($dias, $extras, $habitacion)
        {

        }

    }
    ?>

</body>

</html>