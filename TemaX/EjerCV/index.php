<?php



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
    <form action="" method="post" class="formulario">
        <fieldset>
            <legend>Datos Personales</legend>
            <p>Nombre:</p>
            <p><input type="text" name="nombre" id="nombre"></p>
            <p>Apellido:</p>
            <p><input type="text" name="apellido" id="apellido"></p>
            <p>DNI:</p>
            <p><input type="text" name="dni" id="dni"></p>
            <p>Fecha de nacimiento:</p>
            <p><input type="date" name="fechaNacimiento" id="fechaNacimiento"></p>
            <p>Sexo: </p>
            <p><input type="radio" name="sexo" id="masculino">Masculino <input type="radio" name="sexo"
                    id="femenino">femenino <input type="radio" name="sexo" id="otro">Otro</p>
            <p>Correo Electronico:</p>
            <p><input type="email" name="correo" id="correo"></p>
            <p>Envío de CV: <input type="file" name="curriculum" id="curriculum"></p>
            <p><input type="submit" value="Guardar cambios"> <input type="reset" value="Borrar los datos introducidos">
            </p>
    </form>
</body>

</html>