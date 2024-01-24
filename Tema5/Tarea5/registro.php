<?php
session_start();
require_once 'DB.php';
$db = new DB();
$conn = $db->getConnection();

// Selección de pizzas
$seleccion = isset($_SESSION['seleccion']) ? $_SESSION['seleccion'] : new Seleccion();

// Obtener los datos del pedido
$num_pedido = $seleccion->getPizzas()[0]->getId();
$forma_pago = $_POST['forma_pago'];
$hora_recogida = $_POST['hora_recogida'];

// Insertar pedido
$stmt = $conn->prepare("INSERT INTO pedidos (num_pedido, forma_pago, hora_recogida) VALUES (?, ?, ?)");
$stmt->execute([$num_pedido, $forma_pago, $hora_recogida]);

// Insertar detalles del pedido
foreach ($seleccion->getPizzas() as $pizza) {
    $stmt = $conn->prepare("INSERT INTO detalles (num_pedido, id_pizza, precio) VALUES (?, ?, ?)");
    $stmt->execute([$num_pedido, $pizza->getId(), $pizza->getPrecio()]);
}

// Vaciar selección
$seleccion->vaciarSeleccion();
$_SESSION['seleccion'] = $seleccion;

// Redirigir a la página de inicio
header('Location: inicio.php');
exit;
?>