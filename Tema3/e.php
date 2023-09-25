<?php
$numero1 = 0;
$numero2 = 1;

echo $numero1 . ", " . $numero2 . ", ";

for ($i = 2; $i < 2000; $i++) {
    $siguiente_numero = $numero1 + $numero2;
    echo $siguiente_numero . "<br/>";

    // Actualiza los valores de $numero1 y $numero2 para el siguiente término.
    $numero1 = $numero2;
    $numero2 = $siguiente_numero;
}

?>