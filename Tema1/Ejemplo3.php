<?php
$cadena = "Tipo de dato cadena";
$ref = &$cadena;
$ref2 = $cadena;
echo $ref;
echo "<br/>";
$cadena = "nueva asignación";
echo $ref;
echo "<br/>";
echo $ref2;
?>  
