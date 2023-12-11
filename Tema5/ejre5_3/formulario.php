<?php
session_start();
$satisfaccion = ["Muy mal", "Mal", "Media", "Buena", "Muy buena"];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <h1>VALORACIÓN</h1>
    <form action="" method="post">
        <p>nombre: <input type="text" name="nombre" id="nombre"></>
        <p>apellido: <input type="text" name="apellido" id="apellido"></>
        <p>correo electrónico: <input type="text" name="correo" id="correo"></>
        <p><select name="satisfaccion" id="satisfaccion">
                <?php
                foreach ($satisfaccion as $satisfecho) {
                    echo "<option value='$satisfecho'> $satisfecho </option>";
                }
                ?>
                <!-- me cago en mis putos muertos pisados -->
            </select></p>
        <p>Comentarios: <textarea name="comentario" cols="30" rows="10"></textarea></p>
        <p><input type="submit" value="Guardar" name="enviar"> <input type="reset" value="Limpiar" name="limpiar"></p>
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre']) || !empty($_POST['apellido']) || !empty($_POST['correo'])) {
            $_SESSION['nomrbeDetuMadrastra'] = $_POST['nombre'];
            $_SESSION['apellidoDeTuTia'] = $_POST['apellido'];
            $_SESSION['correoDeTuAbuela'] = $_POST['correo'];
            $_SESSION['satisfayer'] = $_POST['satisfaccion'];
            $_SESSION['comentario'] = $_POST['comentario'];
            echo "<a href='conectado.php'> Ver contenido guardado </a>";
        } else {
            echo "Ponlo bien mamón de mierda";
        }
    }
    ?>
</body>

</html>