<?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $tamanoArchivo = $_FILES["fichero"]['size'];
    $tipoArchivo = $_FILES["fichero"]['type'];
    $archivoArchivo = $_FILES["fichero"]['name'];
    print "guardado";
    print "Nombre: $nombre <br>Apellido: $apellido <br>DNI: $dni <br>Fecha de Nacimiento: $fechaNacimiento <br>Sexo: $sexo <br>Correo: $correo <br>
    e";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>
    <style>
        p {
            margin: 5px;
        }
    </style>
</head>

<body>
    <h3>Envía tu CV</h3>
    <form action="" method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Datos Personales</legend>
            <p>Nombre:</p>
            <p><input type="text" name="nombre" id="nombre" required></p>
            <p>Apellido:</p>
            <p><input type="text" name="apellido" id="apellido" required></p>
            <p>DNI:</p>
            <p><input type="text" name="dni" id="dni" required></p>
            <p>Fecha de nacimiento:</p>
            <p><input type="date" name="fechaNacimiento" id="fechaNacimiento" required></p>
            <p>Sexo: </p>
            <p><input type="radio" name="sexo" id="masculino" required>Masculino <input type="radio" name="sexo"
                    id="femenino" required>femenino <input type="radio" name="sexo" id="otro" required>Otro</p>
            <p>Correo Electronico:</p>
            <p><input type="email" name="correo" id="correo" required></p>
            <p>Envío de CV: <input type="file" name="fichero" required></p>
            <p><input type="submit" value="Guardar cambios" name="enviar"> <input type="reset"
                    value="Borrar los datos introducidos" name="limpiar">
            </p>
    </form>
</body>

</html>