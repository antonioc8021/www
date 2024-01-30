<?php
// Obtiene la extensión de los ficheros de un directorio

//definimos el path de acceso
$path = "./";
//abrimos el directorio
$dir = opendir($path);
//Mostramos las informaciones
while ($elemento = readdir($dir))
{ 
	// no mostrar los puntos 
	if ($elemento!="." && $elemento!="..") {
        if(is_dir($path.$elemento)){
        echo $elemento." <- es un directorio<br>";
            }
        if(is_file($path.$elemento)){
        echo pathinfo($elemento, PATHINFO_FILENAME)." y su extension es ".pathinfo($elemento, PATHINFO_EXTENSION)."<BR>";
            }     
	}
}
//Cerramos el directorio
closedir($dir); 
?>
