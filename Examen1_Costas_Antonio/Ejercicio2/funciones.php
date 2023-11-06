<?php
function buscar($nombre, $telefonos)
{
    if (array_key_exists($nombre, $telefonos)) {
        $numero = $telefonos[$nombre];
        echo "El número de: " . $nombre . ', es: ' . $numero;
    }
}
?>