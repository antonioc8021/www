<?php
// Escribe contenido al final de un fichero.
// Si no existe lo crea.

$a = fopen('nuevo.txt', 'a');
fputs($a,"Texto nuevo que se escribirá en el fichero."."\n");

?>