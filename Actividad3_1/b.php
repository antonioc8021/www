<?php
$numero = 919;
$numeroStr = (string) $numero; // Convierte el número en una cadena

$numeroRevertido = strrev($numeroStr); // Revierte la cadena
if ($numeroStr === $numeroRevertido) { // Compara la cadena original con la cadena revertida
    echo "$numero: es capicua"; // Es capicúa
} else {
    echo "$numero: no es capicua"; // No es capicúa
}
?>