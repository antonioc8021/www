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
                Nombre Cliente
                <input type="text" id="cliente" name="cliente"> <br>
                Dias
                <input type="number" id="dias" name="dias"> <br>
            </fieldset>
        </form>
    </div>

</body>

</html>