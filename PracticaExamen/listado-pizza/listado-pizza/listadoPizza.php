<?php
require_once('clases/DB.php');
require_once "funciones/salida.php";
// Leemos la tabla pizza
$todasPizzas=DB::obtienePizzas();
// mostrar datos
mostrar($todasPizzas);
/*
foreach ($todasPizzas as $datos)
{       echo $datos->getCodigo() ." ---- ";
        echo $datos->getDescripcion() ." ---- ";
        echo $datos->getPrecio()." <br>";
}
*/
 
?>