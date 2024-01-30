<?php 
    require_once 'Volador.interface.php';
    require_once 'ElementoVolador.class.php';
    require_once 'Avion.class.php';
    require_once 'Helicoptero.class.php';    
    require_once 'Aeropuerto.class.php';
    
	// crear un objeto de tipo aeropuerto
    $aeropuerto = new Aeropuerto();
    //crear tres aviones
    $avion1 = new Avion("Avi1", 2, 2, "IBE", "22-09-2022", 350);
    $avion3 = new Avion("Avi2", 4, 5, "VUE", "22-09-2022", 450);
    $avion2 = new Avion("Avi3", 1, 1, "RYA", "22-09-2022", 310);
    // crear tres helicópteros
    $heli1 = new Helicoptero("Heli1", 1, 2, "Juan", 4);
    $heli2 = new Helicoptero("Heli2", 2, 1, "Antonio", 3);
    $heli3 = new Helicoptero("Heli3", 3, 3, "Lidia", 5);
    // insertar los aviones y helicópteros
    $aeropuerto->insertar($avion1);
    $aeropuerto->insertar($avion2);
    $aeropuerto->insertar($avion3);
    $aeropuerto->insertar($heli1);
    $aeropuerto->insertar($heli2);
    $aeropuerto->insertar($heli3);
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 6.4</title>
    </head>
    <body>
        <?php
           echo "<br />1.-Buscar por nombre del elemento volador <br />";
           $nombre="Avi1";
           $aeropuerto->buscar($nombre);
           $nombre="Otro";
           $aeropuerto->buscar($nombre);

           echo "<br />2.- Listar compania <br />";
           $compania="VUE";
           $aeropuerto->listarCompania($compania);
           $compania="VOL";
           $aeropuerto->listarCompania($compania);

           echo "<br />3.- Listar helicópteros <br />";
           $numeroRotores=2;
           $aeropuerto->rotores($numeroRotores);
           $numeroRotores=4;
           $aeropuerto->rotores($numeroRotores);

           echo "<br />4.- Despegue de un avión <br />";
           $nombre="Avi1";
           $altitud=200;
           $velocidad=250;
           $objeto=$aeropuerto->despegar($nombre,$altitud,$velocidad);
           $salida=($objeto->volando()) ? "si" : "no";
           echo "<br />El avión esta volando: ".$salida."<br />";
           echo "Características del avión <br />";
           echo $objeto->mostrarInformacion();
		
           echo "<br />5.- Despegue de un helicóptero <br />";
           $nombre="Heli1";
           $altitud=100;
           $velocidad=150;
           $objeto=$aeropuerto->despegar($nombre,$altitud,$velocidad);
           $salida=($objeto->volando()) ? "si" : "no";
           echo "<br />El helicóptero esta volando: ".$salida."<br />";
           echo "Características del helicóptero <br />";
           echo $objeto->mostrarInformacion();
        ?>
    </body>
</html>