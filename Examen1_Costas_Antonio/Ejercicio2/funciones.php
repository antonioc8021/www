<?php

// Busca la clave dentro del array y devuelve el número el cual se almacena en una variable para ser devuelta
function buscar($nombre, $telefonos)
{
    if (array_key_exists($nombre, $telefonos)) {
        $numero = $telefonos[$nombre];
        echo "El número de: " . $nombre . ', es: ' . $numero;
    } else {
        echo 'No se encontró ningún contacto con el nombre introducido';
    }
}

// Comprueba si ya existe la clave, en caso contrario añade el número de teléfono, dos nombres no se pueden repetir pero si dos números
function anadir($nombre, $numero, &$telefonos)
{
    if (!array_key_exists($nombre, $telefonos)) {
        $telefonos[$nombre] = $numero;
        echo 'Contacto registrado de manera correcta.';
    } else {
        echo 'Ya existe una persona con ese nombre.';
    }
}

// busca si existe la clave introducida y en tal caso la elimina.
function eliminar($nombre, &$telefonos)
{
    if (array_key_exists($nombre, $telefonos)) {
        unset($telefonos[$nombre]);
        echo 'Se elimino el contacto de forma correcta';
    } else {
        echo 'No se encontró ningún contacto con el nombre introducido';
    }
}


// Va recorriendo todo el Array sacandolo en una tabla
function listar($agenda)
{
    print('LOS CONTACTOS DE LA AGENDA SON:<br>');
    foreach ($agenda as $nombre => $numero) {
        print '<tr>';
        print '<td>' . $nombre . '</td>';
        print '<td>' . $numero . '</td>';
        print '</tr>';
    }
}

?>