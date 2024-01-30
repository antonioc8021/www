<?php 

    require_once 'Producto.class.php';
    require_once 'Electronica.class.php';
    require_once 'Alimentacion.class.php';

    $productos = array();
    $productos[] = new Alimentacion(1, 1.15, "Arroz integral", 10, 2023);
    $productos[] = new Alimentacion(2, 0.75, "Tomate triturado", 9, 2024);
    $productos[] = new Alimentacion(3, 0.9, "Yogures", 10, 2022);
    $productos[] = new Electronica(11, 5.45, "Ratón", 2);
    $productos[] = new Electronica(12, 17.99, "Teclado", 2);
    $productos[] = new Electronica(13, 7.99, "USB", 5);

 ?>


<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $importeElectronica = 0;
            $importeAlimentacion = 0;
            echo "<h1> La lista de productos es: </h1>";
            echo "<ul>";
                foreach ($productos as $producto) 
                {
                    echo "<li>$producto</li>";
                    if($producto instanceof Electronica)
                        $importeElectronica+= $producto->getPrecio();
                    else
                        $importeAlimentacion+= $producto->getPrecio();
                }
            echo "</ul>";
            echo "<h2>Importe en Electronica: ".$importeElectronica."</h2>";
            echo "<h2>Importe en Alimentación: ".$importeAlimentacion."</h2>";
            echo "<p>Se ha gastado más en <strong> ";
            echo ($importeAlimentacion>$importeElectronica) ? "alimentación" : "electrónica";
            echo "</strong></p>";
        ?>
    </body>
</html>