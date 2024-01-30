<?php 
    require_once 'Encendible.interface.php';
    require_once 'Coche.class.php';
    require_once 'Bombilla.class.php';

    function enciende_algo(Encendible $algo)
    {
        $algo->encender();
    }

    function apaga_algo(Encendible $algo)
    {
        $algo->apagar();
    }

    $coche1 = new Coche();
    $coche1->repostar(50);
    $bombilla1 = new Bombilla(50);

    enciende_algo($coche1);
    enciende_algo($bombilla1);
	
    apaga_algo($coche1);
    apaga_algo($bombilla1);
 ?>