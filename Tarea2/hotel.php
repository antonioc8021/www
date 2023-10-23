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

        .form {
            text-align: center;
        }
    </style>

</head>

<body>
    <h1 class="title">RESERVA DE HABITACIONES DE HOTEL</h1>
    <div class="form">
        <form action="./hotel.php" method="post">
            <fieldset>
                <legend>HOTEL</legend>
                <br>Nombre Cliente
                <input type="text" id="cliente" name="cliente"> <br><br>
                Dias
                <input type="number" id="dias" name="dias"> <br><br>
                Tipo de habitación:
                <select name="TipoHabitacion" id="TipoHabitacion">
                    <option value="elegir"></option>
                    <?php
                    $tipoHabitacion = ["SUITE", "FAMILIAR", "TRIPLE", "DOBLE", "INDIVIDUAL"];
                    foreach ($tipoHabitacion as $tipo) {
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
                <input type="submit" id="limpiar" value="Limpiar" name="limpiar" />
                <input type="submit" id="reservar" value="Reservar" name="reservar" />
            </fieldset>
        </form>
    </div>

</body>

</html>