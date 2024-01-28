<?php
$host = "localhost";
$user = "dwes";
$password = "abc123.";
$database = "pizzeria";

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

function numeroPedido()
{
    global $conn;

    $sql = "SELECT MAX(numero) FROM pedido";
    $numeroPedido = $conn->query($sql);

    $row = $numeroPedido->fetch();

    $numeroPedido = $row[0];
    return "Numero de pedido: $numeroPedido++";
}

// Llama a la función
numeroPedido();
