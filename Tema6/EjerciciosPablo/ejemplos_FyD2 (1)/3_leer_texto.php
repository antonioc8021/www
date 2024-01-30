<?php
// Muestra el contenido de una página web de otro sitio:

$a = file('http://www.iesaglinares.com/index.php');
foreach($a as $linea)
	echo $linea;
?>