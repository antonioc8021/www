<?php
session_start();

// Función para calcular la media de temperaturas
function calcularMedia($temperaturas)
{
    return array_sum($temperaturas) / count($temperaturas);
}

// Inicializar la sesión si no está definida
if (!isset($_SESSION['ciudades'])) {
    $_SESSION['ciudades'] = [];
}

// Manejar el envío del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['calcular'])) {
        // Calcular la media y almacenar en la sesión si supera los 30 grados
        $ciudad = $_POST['ciudad'];
        $temperaturas = [
            $_POST['julio'],
            $_POST['agosto'],
            $_POST['septiembre']
        ];

        $media = calcularMedia($temperaturas);

        if ($media > 30) {
            $_SESSION['ciudades'][$ciudad] = $media;
        }
    } elseif (isset($_POST['listar'])) {
        // Mostrar la lista de ciudades y medias almacenadas en la sesión
        if (!empty($_SESSION['ciudades'])) {
            echo '<h2>Lista de Ciudades y Medias</h2>';
            echo '<ul>';
            foreach ($_SESSION['ciudades'] as $ciudad => $media) {
                echo '<li>' . $ciudad . ': ' . $media . ' grados</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>No hay ciudades almacenadas.</p>';
        }
    } elseif (isset($_POST['cerrar'])) {
        // Destruir la sesión existente
        session_destroy();
        echo '<p>Sesión cerrada.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verano.php</title>
</head>

<body>
    <h1>Calculadora de Medias de Temperaturas</h1>

    <form action="" method="post">
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" required>

        <label for="julio">Temperatura Julio:</label>
        <input type="number" name="julio" required>

        <label for="agosto">Temperatura Agosto:</label>
        <input type="number" name="agosto" required>

        <label for="septiembre">Temperatura Septiembre:</label>
        <input type="number" name="septiembre" required>

        <br>

        <input type="submit" name="calcular" value="Calcular">
        <input type="submit" name="listar" value="Listar">
        <input type="submit" name="cerrar" value="Cerrar">
    </form>
</body>

</html>