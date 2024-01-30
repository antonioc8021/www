<?php
// Muestra el contenido de un directorio (en este caso el actual),
// indicando el tamaño de cada elemento.

$path = ".";
//abrimos el directorio
$descriptor= opendir($path);
//abre el directorio actual
while($fichero = readdir($descriptor)){
	echo"$fichero: " .filesize($fichero).'bytes <br>';
}
closedir($descriptor);

echo "Directorio actual: ".getcwd()."<br>";
echo "Nombre de fichero: ".basename("datos.txt");
?>

