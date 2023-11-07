<?php
$dwes = new PDO('mysql:host=localhost;dbname=tienda', 'super', 'super123');
$version = $dwes->getAttribute(PDO::ATTR_DRIVER_NAME);
echo $version;
?>