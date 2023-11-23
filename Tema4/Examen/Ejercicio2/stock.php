<?php
require("conexion.php");
$sql = "SELECT stock.producto, stock.tienda, tienda.nombre, stock.unidades FROM stock, tienda";
$stock = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td,
        tr {
            border: none;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Macarrones de la abuela</h1>
    <h1>Ejercicio: Stock</h1>
    <h3>Stock en tiendas:</h3>
    <table>
        <tr>
            <th>Producto</th>
            <th>Tienda</th>
            <th>Nombre</th>
            <th>Unidades</th>
        </tr>
        <?php
        while ($producto = $stock->fetch()) {
            $cod = $producto['producto'];
            $tienda = $producto['tienda'];
            $nombreTienda = $producto['nombre'];
            $unidades = $producto['unidades'];
            ?>
            <tr>
                <td>
                    <?php echo $cod ?>
                </td>
                <td>
                    <?php echo $tienda ?>
                </td>
                <td>
                    <?php echo $nombreTienda ?>
                </td>
                <td>
                    <?php echo $unidades ?>
                </td>
                <td>
                    <?php
                    if ($unidades >= 3) { ?>
                        <input type="button" value="Trasladar" id="trasladar" name="trasladar">
                        <?php
                    }
                    ?>
                </td>

            </tr>




            <?php
        }
        ?>
    </table>

</body>

</html>