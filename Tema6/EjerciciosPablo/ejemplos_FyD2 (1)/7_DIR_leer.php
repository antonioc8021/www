<?php
// Muestra el contenido de un directorio (en este caso el actual), 
// distinguiendo cada elemento si es un fichero o un directorio.

//definimos el path de acceso
$path = "./";

//abrimos el directorio
$dir = opendir($path);

//Mostramos las informaciones
while ($elemento = readdir($dir)) {
	if(is_dir($path.$elemento))
		echo "directorio: ". $elemento."<br>";
	else
		echo "fichero: ". $elemento."<br>";
}

//Cerramos el directorio
closedir($dir); 
?>
