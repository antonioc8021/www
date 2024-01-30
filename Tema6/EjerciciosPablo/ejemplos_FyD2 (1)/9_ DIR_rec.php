<?php
// Lista los directorios contenidos en una ruta dada, 
// recorriendo a su vez los directorios contenidos.

function listar_directorios_ruta($ruta){ 
   // abrir un directorio y listarlo recursivo 
   if (is_dir($ruta)) { 
      if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) ) { 
            //esta l�nea la utilizar�amos si queremos listar todo lo que hay en el directorio 
            //mostrar�a tanto archivos como directorios 
            //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file); 
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, distinto que "." y ".." 
               echo "<br>Directorio: $ruta$file"; 
               listar_directorios_ruta($ruta . $file . "/"); 
            } 
         } 
      closedir($dh); 
      } 
   }else 
      echo "<br>No es ruta valida"; 
}

listar_directorios_ruta("../");
?>