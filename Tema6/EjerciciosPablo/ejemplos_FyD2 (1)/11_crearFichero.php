<?php
// Recorre un directorio y genera un fichero de texto (listado.txt)
// que contiene los nombres de los ficheros

$path = "..";
$dir=dir($path);
echo "Directorio ".$dir->path.":<br><br>";
$a=fopen('listado.txt','w');

while ($elemento = $dir->read())
{  
    fputs($a, $elemento. "\n");  
}
fclose($a);
$dir->close();

?>


