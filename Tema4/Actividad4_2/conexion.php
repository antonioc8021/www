<!-- Modo de conexion haciendo un try catch para capturar la excepciones -->
<?php
$host = 'localhost';
$user = 'goyas';
$password = 'goyas123';
$database = 'goyas';

try {
    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $dwes = new PDO('mysql:host=localhost;dbname=$database', $user, $password, $opciones);
} catch (PDOException $e) {
    echo $e->getCode();
    $mensaje = $e->getMessage();
    echo 'Error en la conexión' . $mensaje;
    exit();
}
?>