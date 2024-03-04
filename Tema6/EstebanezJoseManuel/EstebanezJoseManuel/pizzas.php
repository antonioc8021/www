<?php
include("./clases/conexion.php");
if (isset($_POST["anadir"])) {
    if (!empty($_POST["codigo"]) && !empty($_POST["descripcion"]) && !empty($_POST["precio"]) && !empty($_POST["tipo"]) && isset($_FILES["foto"])) {
        $archivo_nombre = pathinfo($_FILES["foto"]['name'], PATHINFO_FILENAME);
        $extensionPermitida = "png";
        $extension = pathinfo($_FILES["foto"]['name'], PATHINFO_EXTENSION);
        $guardado = true; // La inicializamos en true para que no salte el error de imagen si el codigo escrito ya existe
        $insert = false;
        $numero = 0;
        $sql = "SELECT * from pizza WHERE codigo LIKE'" . $_POST["codigo"] . "';";
        if ($codigoExistente = DB::ejecutaConsulta($sql)->fetch()) {
            $codigoExistente = true;
        } else {
            $codigoExistente = false;
        }
        if ($extension === $extensionPermitida && $_FILES["foto"]['size'] < 100000) {
            if (!$codigoExistente) {
                $sql2 = "INSERT INTO pizza values ('" . $_POST["codigo"] . "','" . $_POST["descripcion"] . "','" . $_POST["precio"] . "','" . $_POST["tipo"] . "','" . $archivo_nombre . "')";
                if (DB::ejecutaConsulta($sql2)) {
                    $insert = true;
                }
            }
            if ($insert) {
                while (file_exists('./img/' . $archivo_nombre . "." . $extension)) {
                    $numero++;
                    $archivo_nombre = pathinfo($_FILES["foto"]['name'], PATHINFO_FILENAME) . '_' . $numero; // vuelvo a llamar al pathinfo porque si no el nombre del archivo se concatena ej: foto1_2_3_4
                }
                $destino = "./img/" . $archivo_nombre . "." . $extension;
                if (!move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
                    $guardado = false;
                }

            }
        } else {
            $guardado = false;
        }

    }
}
if (isset($_POST["eliminar"])) {
    $eliminacion = false;
    if (!empty($_POST["codigo"])) {
        $sql = "SELECT * from pizza WHERE codigo LIKE'" . $_POST["codigo"] . "';";
        if ($codigoExistente = DB::ejecutaConsulta($sql)->fetch()) {
            $codigoExistente = true;
            $sqlEliminar = "DELETE FROM pizza WHERE codigo LIKE'" . $_POST["codigo"] . "';";
            if (DB::ejecutaConsulta($sqlEliminar)) {
                $eliminacion = true;
            }
        } else {
            $codigoExistente = false;
        }
    }
}
if (isset($_POST["mostrar"])) {
    header("Location: carta.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ejercicio pizzas</h1>
    <h3>Modificar carta de pizzas</h3>
    <!-- MUY IMPORTANTE poner el enctype="multipart/form-data" para que admita las fotos -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" maxlength="5">
        <br><br>
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" maxlength="20">
        <br><br>
        <label for="precio">Precio</label>
        <input type="number" name="precio">
        <br><br>
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" maxlength="20">
        <br><br>
        <label for="foto">Foto</label>
        <input type="file" name="foto">
        <br><br>
        <input type="submit" value="Añadir pizza" name="anadir">
        <input type="submit" value="Eliminar pizza" name="eliminar">
        <input type="submit" value="Mostrar carta" name="mostrar">
    </form>
    <div>
        <?php
        if (isset($_POST["anadir"])) {

            if (isset($guardado) && $guardado && isset($insert) && $insert) {
                echo "Pizza insertada con éxito<br>";
            }
            if (isset($codigoExistente) && $codigoExistente) {
                echo "No se pudo insertar la pizza, ponga un codigo no existente<br>";
            }
            if (isset($guardado) && !$guardado) {
                echo "Por favor, compruebe el formato del archivo de imagen , solo se aceptan png y 100KB de tamaño<br>";
            }
        }
        if (isset($_POST["eliminar"])) {
            if ($eliminacion) {
                echo "Eliminacion correcta";
            } else {
                echo "Codigo no existente, introduzca uno correcto";
            }
        }
        ?>
    </div>
</body>

</html>