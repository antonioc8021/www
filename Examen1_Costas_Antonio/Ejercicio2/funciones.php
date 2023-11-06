<?php
function buscar($nombre, $telefonos)
{
    if (array_key_exists($nombre, $telefonos)) {
        $numero = $telefonos[$nombre];
        echo "El número de: " . $nombre . ', es: ' . $numero;
    } else {
        echo 'No se encontró ningún contacto con el nombre introducido';
    }
}

function anadir($nombre, $numero, &$telefonos)
{
    if (!array_key_exists($nombre, $telefonos)) {
        $telefonos[$nombre] = $numero;
        echo 'Contacto registrado de manera correcta.';
    } else {
        echo 'Ya existe una persona con ese nombre.';
    }
}

function eliminar($nombre, &$telefonos)
{
    if (array_key_exists($nombre, $telefonos)) {
        unset($telefonos[$nombre]);
        echo 'Se elimino el contacto de forma correcta';
    } else {
        echo 'No se encontró ningún contacto con el nombre introducido';
    }
}

?>