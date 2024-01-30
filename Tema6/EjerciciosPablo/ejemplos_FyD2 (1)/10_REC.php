<?php
// Lista los elementos contenidos en una ruta dada,
// distinguiendo si son ficheros o directorios,
// recorriendo a su vez los directorios contenidos.

function listar_rec($ruta){ 
   // abrir un directorio y listarlo recursivo 
       if ($dh = opendir($ruta)) { 
         while (($file = readdir($dh)) ) {  
            if (is_dir($ruta . $file) && $file!="." && $file!=".."){ 
               //solo si el archivo es un directorio, 
			   //distinto que "." y ".." 
               echo "<br>Directorio: $ruta$file"; 
               listar_rec($ruta . $file . "/"); 
            } 
			else
				echo "<br>Fichero: $ruta$file"; 
         } 
      closedir($dh); 
      }    
}
listar_rec("../");
?>