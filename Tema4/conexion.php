<?php
$host = 'localhost';
$user = 'super';
$password = 'super123';
$database = 'tienda';

$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$dwes = new PDO('mysql:host=localhost;dbname=tienda', 'super', 'super123', $opciones);
$driverVersion = $dwes->getAttribute(PDO::ATTR_DRIVER_NAME);
$serverVersion = $dwes->getAttribute(PDO::ATTR_SERVER_VERSION);

?>