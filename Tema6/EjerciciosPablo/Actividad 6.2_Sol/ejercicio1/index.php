<?php

    require_once 'Empleado.class.php';
    require_once 'Encargado.class.php';
    // creo un empleado
    $empleado = new Empleado("Pepe",1000);
    echo "El sueldo de ". $empleado->getNombre(). " es " . $empleado->getSueldo() . "<br />";
    // creo un encargado
    $encargado = new Encargado("Jose",1000);
    echo "El sueldo de ". $encargado->getNombre(). " es " . $encargado->getSueldo() . "<br />";
?>