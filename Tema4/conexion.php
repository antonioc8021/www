<?php
$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dwes = new PDO('mysql:host=localhost;dbname=tienda', 'super', 'super123', $opciones);
$version = $dwes->getAttribute(PDO::ATTR_DRIVER_NAME);
echo $version;
?>