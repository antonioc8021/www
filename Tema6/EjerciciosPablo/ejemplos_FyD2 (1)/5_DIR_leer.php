<?php
// Muestra el contenido de un directorio.
// En este caso el directorio padre.

//definimos el path de acceso
$path = "..";
//abrimos el directorio
$dir = opendir($path);
//Mostramos las informaciones
while ($elemento = readdir($dir))
{ 
	// no mostrar los puntos 
	if ($elemento!="." && $elemento!="..") 
		echo $elemento."<br>";
		// indicar si es fichero / directorio
		// si es fichero indicar el tamaño
}
//Cerramos el directorio
closedir($dir); 
?>
