<?php
$host = 'localhost';
$user = 'automovil';
$password = 'auto123.';
$database = 'ocasion';

try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    // muy importante, realizar la instrucción de abajo con comillas dobles y no simples.
    $conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password, $opciones);
} catch (PDOException $e) {
    echo $e->getCode();
    $mensaje = $e->getMessage();
    echo 'Error en la conexión' . $mensaje;
    exit();
}
?>