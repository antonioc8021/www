<?php 
// Obtiene la extensión de los ficheros de un directorio

//definimos el path de acceso
$path = "../"; //directorio actual

//abrimos el directorio
$dir = opendir($path);

//Mostramos las informaciones
while ($elemento = readdir($dir)) {
    if (!is_dir($path.$elemento)) { //es directorio
        $extension=new SplFileInfo($elemento);
        echo "Fichero->" . $elemento ." tiene extensión: -> ". "<b>".$extension->getExtension()."</b>". "<br>";
    }else{
        echo $elemento. " <- es un directorio"."<br>";
    }
}

//Cerramos el directorio
closedir($dir);

?>