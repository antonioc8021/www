<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="dwes.css">
</head>

<body>
    <div id="encabezado">
        <h1>Ochomiles</h1>
    </div>
    <div id="contenido">
        <h4>Opciones disponibles:</h4>
        <ol>
            <li>Obtener los picos del himalaya.</li>
            <li>Ordenar las alturas de los picos por rangos.</li>
            <li>Introducir un nuevo pico.</li>
        </ol>
        <form action="" method="post">
            <p>Opción:
                <input type="number" name="numero" id="numero">
                <input type="submit" value="enviar" id="enviar" name="enviar">
            </p>
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            if ($_POST['numero'] < 1 || $_POST['numero'] > 3) {
                echo 'Debe seleccionar los valores entre 1 y 3.';
            } elseif ($_POST['numero'] == 1) {
                header("location: himalaya.php");
            } elseif ($_POST['numero'] == 2) {
                header("location: altura.php");
            } elseif ($_POST['numero'] == 3) {
                header("location: nuevo.php");
            }
        }


        ?>
    </div>
</body>

</html>