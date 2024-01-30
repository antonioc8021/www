<?php
// Muestra el contenido de un directorio utilizando objetos.
// En este caso el directorio actual.

//definimos el path de acceso
$path=".";

//instanciamos el objeto
$dir=dir($path);

//Mostramos las informaciones
echo "Directorio ".$dir->path.":<br><br>";

while ($elemento = $dir->read())
{
   echo $elemento."<br>";
}
//Cerramos el directorio
$dir->close();
?>