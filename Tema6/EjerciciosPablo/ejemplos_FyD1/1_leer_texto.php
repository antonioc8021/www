<?php
// Lee el contenido de un fichero línea a línea:

$a = fopen('datos.txt', 'r');
while(!feof($a)){
	echo fgets($a) . '<br>';}
fclose($a);

/*
$a = fopen('datos.txt', 'r');
while(!feof($a)){
	echo fgets($a,4) . '<br>';}
fclose($a);
*/
?>
