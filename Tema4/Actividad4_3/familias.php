<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familias</title>
</head>

<body>
    <div id="cabeza">
        <h2>EJERCICIO: OBTENCIÓN DE PRODUCTOS DE UNA FAMILIA</h2>
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