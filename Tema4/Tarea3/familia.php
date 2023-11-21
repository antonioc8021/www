<?php
require("conexion.php");

//consigo los productos:
// $sql = "SELECT * FROM producto";
// $productos = $conn->query($sql);
$sql = "SELECT * FROM familia";
$familia = $conn->query($sql);

// Si se pulsa el botón que muestre por pantalla los productos de esa familia:

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Familia de Productos</title>
</head>

<body>
    <div class="cabecera">
        <h1>Tarea: Listado de productos de una familia</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <span>Familia: </span>
            <select name="familia" id="familia">
                <?php
                while ($cod = $familia->fetch()) {
                    ?>
                    <option value="<?php echo $cod['nombre']; ?>">
                        <?php echo $cod['nombre']; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <input type="submit" value="Mostrar productos" name="mostrar" />
        </form>

        <?php
        // echo $_POST['familia'];
        if (isset($_POST['mostrar'])) {
            $nombreFamilia = $_POST['familia'];
            $sql = "SELECT cod FROM familia WHERE nombre='$nombreFamilia'";
            $codigo = $conn->query($sql);
            $cod = $codigo->fetch();
            $codFinal = $cod['cod'];

            $sql = "SELECT * FROM producto WHERE familia='$codFinal'";
            $resultado = $conn->query($sql);
            while ($mostrar = $resultado->fetch()) {
                $nombreCorto = $mostrar['nombre_corto'];
                $pvp = $mostrar['PVP'];
                $codProducto = $mostrar['cod'];
                ?>
                <form action="editar.php" method="post">
                    <?php
                    echo $nombreCorto . ': ' . $pvp . '€';
                    ?>
                    <input type="submit" value="Editar" name="editar">
                    <input type="hidden" name="codProducto" value="<?php $codProducto ?>">
                </form>

                <?php
                echo "<br>";
            }

            if (isset($_POST['editar'])) {
                header("location: editar.php?id=" . $idProducto);
                exit();
            }
        }
        ?>

    </div>
</body>

</html>