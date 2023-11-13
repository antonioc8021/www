<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familias</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="encabezado">
        <h1>Ejercicio: Obtención de Productos de una Familia</h1>
        <form id="form_action" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <span>Familia: </span>
            <select name="familia" id="familia">
                <?php
                if (isset($_POST['familia'])) {
                    $familia = $_POST['familia'];

                }
                $dwes = new PDO("mysql:host=localhost;dbname=dwes", "dwes", "abc123.");
                $sqlº

                    ?>
            </select>

        </form>
    </div>


    <?php



    ?>

</body>

</html>