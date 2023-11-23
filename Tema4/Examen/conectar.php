<?php
$host = "localhost";
$user = "examen";
$password = "examen123";
$database = "ochomiles";

try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password, $opciones);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo $e->getCode();
    $mensaje = $e->getMessage();
    echo 'Error en la conexión: ' . $mensaje;
    exit();
}
?>