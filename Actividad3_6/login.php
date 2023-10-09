<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer login</title>
    <h1>LOGIN</h1>
</head>

<body>
    <form action="login.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="text" id="contrasena" name="contrasena"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($_POST['enviar'])) {
        if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            echo "HAS ACCEDIDO CORRECTAMENTE";
        }
    }
    ?>
</body>

</html>