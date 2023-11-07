<?php
$numero = 123;
$unidad = intval($numero / 10);
$decena = intval($numero / 100);
$centena = intval($numero / 1000);
echo (intval($unidad + $decena + $centena)) . "<br/>";
echo (intval($unidad * $decena * $centena)) . "<br/>";
if (($unidad + $decena + $centena) === ($unidad * $decena * $centena)) {
    echo "Es igual primo";
} else {
    echo "No lo es primo";
}
?>