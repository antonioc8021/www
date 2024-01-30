<?php
include "./clases/conexion.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar carta</title>
    <link rel="stylesheet" href="./dwes.css">
    <style>
        .wrapper {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <div id="encabezado">
            <h1>Ejercicio: Pizzas</h1>
        </div>

        <div id="contenido">
            <h1>la pizza con piña no es pizza</h1>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" anctype="multipart/form-data">
                <p>Código: <input type="text" name="codigo"></p>
                <p>Descripción: <input type="text" name="descripcion"></p>
                <p>Precio: <input type="number" name="precio"></p>
                <p>Tipo: <input type="text" name="tipo"></p>
                <p>Foto: <input type="file" name="foto"></p>
                <p>
                    <input type="submit" value="Añadir Pizza" name="anadirPizza">
                    <input type="submit" value="Eliminar Pizza" name="eliminarPizza">
                    <input type="submit" value="Mostrar carta" name="mostrarCarta">
                </p>
            </form>
            <?php
            if (isset($_POST['anadirPizza'])) {
                if (empty($_POST['codigo']) || empty($_POST['descripcion']) || empty($_POST['precio']) || empty($_POST['tipo']) || empty($_POST['foto'])) {
                    echo 'Se deben de insertar todos los datos en el formulario';
                } else {
                    $codigo = $_POST['codigo'];
                    $descripcion = $_POST['descripcion'];
                    $precio = $_POST['precio'];
                    $tipo = $_POST['tipo'];
                    $foto = $_POST['foto'];
                    try {
                        $sql = "INSERT INTO pizza (codigo, descripcion, precio, tipo, foto) VALUES (:codigo, :descripcion, :precio, :tipo, :foto)";
                        $stmt = $conn->prepare($sql);
                        $stmt->$stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                        $stmt->$stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                        $stmt->$stmt->bindParam(':precio', $precio, PDO::PARAM_INT);
                        $stmt->$stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
                        $stmt->$stmt->bindParam(':foto', $foto, PDO::PARAM_STR);
                        echo 'datos insertados correctamente';
                    } catch (PDOException $e) {
                        echo 'Soy una mierda';
                        echo 'Error al insertar datos: ' . $e->getMessage();
                    }
                }
            }

            if (isset($_POST['eliminarPizza'])) {
                if (empty($_POST['codigo'])) {
                    echo "Se debe de introducir el código de la pizza para poder borrarla";
                } else {


                }
            }

            if (isset($_POST['mostrarCarta'])) {
                header("Location: carta.php");
            }
            ?>




        </div>

        <div id="pie">
        </div>

    </div>
</body>

</html>