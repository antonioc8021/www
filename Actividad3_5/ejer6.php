<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_POST['numero'])) {
            echo "TABLA DE MULTIPLICAR DEL: " . $_POST['numero'] . "<br>";
            for ($i = 1; $i <= 10; $i++) {
                echo $i . " X " . $_POST['numero'] . " = " . $i * $_POST['numero'] . "<br>";
            }
        }
    }
    ?>
    <br /><a href="ejer6.html">volver
</body>

</html>