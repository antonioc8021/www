<?php
session_start();
require_once 'DB.php';
$db = new DB();
$conn = $db->getConnection();

// Obtener las pizzas
$stmt = $conn->prepare("SELECT * FROM pizzas");
$stmt->execute();
$pizzas = $stmt->fetchAll(PDO::FETCH_CLASS, 'Pizza');

// Selección de pizzas
$seleccion = isset($_SESSION['seleccion']) ? $_SESSION['seleccion'] : new Seleccion();

// Procesar formulario
if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
        case 'add':
            $id_pizza = filter_var($_POST['id_pizza'], FILTER_SANITIZE_NUMBER_INT);
            foreach ($pizzas as $pizza) {
                if ($pizza->getId() == $id_pizza) {
                    $seleccion->addPizza($pizza);
                    break;
                }
            }
            break;
        case 'remove':
            $key = filter_var($_POST['key'], FILTER_SANITIZE_NUMBER_INT);
            $seleccion->removePizza($key);
            break;
    }
    $_SESSION['seleccion'] = $seleccion;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzería Online - Selección de pizzas</title>
</head>

<body>
    <h1>Selecciona tus pizzas</h1>
    <form action="" method="post">
        <input type="hidden" name="accion" value="add">
        <?php
        foreach ($pizzas as $key => $pizza) {
            echo "<div>";
            echo "<img src='$pizza->getImagen()' alt='$pizza->getNombre()'><br>";
            echo "<input type='hidden' name='id_pizza' value='$pizza->getId()'>";
            echo "<button type='submit'>$pizza->getNombre() ($pizza->getPrecio() €)</button>";
            echo "</div>";
        }
        ?>
    </form>

    <h2>Pizzas seleccionadas:</h2>
    <ul>
        <?php
        if (count($seleccion->getPizzas()) > 0) {
            foreach ($seleccion->getPizzas() as $key => $pizza) {
                echo "<li><strong>" . $pizza->getNombre() . " (" . $pizza->getPrecio() . " €)</strong>";
                echo " <a href='' name='$key' onclick='event.preventDefault(); document.forms[\"remover\"].submit(); return false;'>Quitar</a>";
                echo "</li>";
            }
        } else {
            echo "<li>No has seleccionado ninguna pizza.</li>";
        }
        ?>
    </ul>

    <form action="" id="remover" method="post">
        <input type="hidden" name="accion" value="remove">
        <input type="hidden" name="key" value="">
    </form>

    <p>
        <a href="inicio.php">Volver a la página de inicio</a>
        |
        <a href="registro.php">Confirmar pedido</a>
    </p>
</body>

</html>