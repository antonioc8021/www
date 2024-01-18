<?php
require_once("Productos.php");
require_once("Alimentacion.php");
require_once("Electronica.php");

$productoAlimentacion1 = new Alimentacion("A001", 10.909, "Patata", 6, 2023);
$productoAlimentacion2 = new Alimentacion("A002", 3.77, "Leche", 8, 2022);
$productoAlimentacion3 = new Alimentacion("A003", 1.19, "Pan", 5, 2023);

$productoElectronica1 = new Electronica("E001", 299.9, "Paphone", 12);
$productoElectronica2 = new Electronica("E002", 89934928374928734.00, "Smartphone", 24);
$productoElectronica3 = new Electronica("E003", 49.01, "Auriculares", 6);

$productosArray = array($productoAlimentacion1, $productoAlimentacion2, $productoAlimentacion3, $productoElectronica1, $productoElectronica2, $productoElectronica3);

function verDatosProductos($productosArray)
{
    foreach ($productosArray as $producto) {
        $producto->mostrarDatos();
    }
}

function calcularImporteTotal($productosArray)
{
    $total = 0;
    foreach ($productosArray as $producto) {
        $total += $producto->getPrecio();
    }
    return $total;
}

function tipoProductoMasGastado($productosArray)
{
    $sumAlimentacion = 0;
    $sumElectronica = 0;

    foreach ($productosArray as $producto) {
        if ($producto instanceof Alimentacion) {
            $sumAlimentacion += $producto->getPrecio();
        } elseif ($producto instanceof Electronica) {
            $sumElectronica += $producto->getPrecio();
        }
    }
    if ($sumAlimentacion > $sumElectronica) {
        return "Alimentación";
    } elseif ($sumElectronica > $sumAlimentacion) {
        return "Electrónica";
    } else {
        return "Ambos tipos tienen el mismo gasto";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Plantilla</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <?php
    echo "<h2>Recorrer y mostrar los datos de cada :</h2>";
    verDatosProductos($productosArray);

    echo "<h2>Importe total de todos los productos comprados:</h2>";
    echo "<p>Total: " . number_format(calcularImporteTotal($productosArray), 2) . "€</p>";

    echo "<h2>Tipo de  en el que te has gastado más:</h2>";
    echo "<p>Te has gastado más en: <span> " . tipoProductoMasGastado($productosArray) . "</span></p>";
    ?>
</body>

</html>