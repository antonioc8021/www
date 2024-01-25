<?php
require_once 'DB.php';
$db = new DB();
$conn = $db->getConnection();

// Obtener el último pedido
$stmt = $conn->prepare("SELECT MAX(num_pedido) as max_pedido FROM pedidos");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$num_pedido = $result['max_pedido'] + 1;

// Obtener las formas de pago
$stmt = $conn->prepare("SELECT forma_pago FROM formas_pago");
$stmt->execute();
$formas_pago = $stmt->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería Online - Inicio</title>
</head>

<body>
    <h1>Nuevo Pedido (#
        <?php echo $num_pedido; ?>)
    </h1>
    <form action="encargo.php" method="post">
        <input type="hidden" name="num_pedido" value="<?php echo $num_pedido; ?>">
        <label for="forma_pago">Forma de pago:</label>
        <select name="forma_pago" id="forma_pago">
            <?php
            foreach ($formas_pago as $forma_pago) {
                echo "<option value='$forma_pago'>$forma_pago</option>";
            }
            ?>
        </select><br>
        <label for="hora_recogida">Hora de recogida:</label>
        <?php
        date_default_timezone_set('Europe/Madrid');
        $hora_recogida = date('H:i:s', strtotime('+40 minutes'));
        echo "<input type='text' name='hora_recogida' value='$hora_recogida' readonly><br>";
        ?>
        <button type="submit">Elegir MENU</button>
    </form>
</body>

</html>