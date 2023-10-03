<?php
// todo: mirar el ejer del profe, lo tiene bastante mejor que yo;
$cadena1 = [];
$cadena2 = [];

function generarArray(&$cadena1, &$cadena2)
{
    for ($i = 0; $i < 20; $i++) {
        $cadena1[$i] = rand(0, 100);
        $cadena2[$i] = rand(0, 100);
    }

}

generarArray($cadena1, $cadena2);
echo $cadena1 . $cadena2;
?>