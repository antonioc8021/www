<?php
// Lee el contenido de un fichero de una vez:

$a = file('datos.txt');
foreach($a as $linea)
	echo $linea. '<br>';
?>