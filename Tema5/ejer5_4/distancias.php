<?php
$rutas = array(
    "oviedo" => 192,
    "madrid" => 400,
    "salamanca" => 360,
    "toledo" => 520,
    "lugo" => 390,
    "sevilla" => 830,
    "barcelona" => 825
);

function obtenerDistancia($ciudad, $rutas)
{
    if (array_key_exists($ciudad, $rutas)) {
        return $rutas[$ciudad];
    } else {
        return "Ciudad no encontrada";
    }
}

function obtenerCiudad($distancia, $rutas)
{
    $ciudades = array_keys($rutas, $distancia, true);
    if (!empty($ciudades)) {
        return $ciudades[0];
    } else {
        return "No hay ciudad a esa distancia";
    }
}

function ciudadesMenores($limite, $rutas)
{
    $ciudadesMenores = array_filter($rutas, function ($distancia) use ($limite) {
        return $distancia < $limite;
    });

    return $ciudadesMenores;
}

function comprobarDistancia($ciudad, $distancia, $rutas)
{
    if (array_key_exists($ciudad, $rutas)) {
        $distanciaReal = $rutas[$ciudad];
        if ($distancia == $distanciaReal) {
            return "La distancia es correcta.";
        } else {
            return "La distancia real es $distanciaReal kms.";
        }
    } else {
        return "Ciudad no encontrada";
    }
}

function mostrarTodasLasCiudades($rutas)
{
    echo "<table border='1'>";
    echo "<tr><th>Ciudad</th><th>Distancia (kms)</th></tr>";

    $color = 'lightblue';

    foreach ($rutas as $ciudad => $distancia) {
        echo "<tr style='background-color:$color;'><td>$ciudad</td><td>$distancia</td></tr>";
        $color = ($color == 'lightblue') ? 'white' : 'lightblue';
    }

    echo "</table>";
}

// Lógica para procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['verDistancia'])) {
        $ciudad = $_POST['ciudad'];
        $distancia = obtenerDistancia($ciudad, $rutas);
        echo "La distancia de $ciudad a Santander es $distancia kms.";
    } elseif (isset($_POST['verCiudad'])) {
        $distancia = $_POST['distancia'];
        $ciudad = obtenerCiudad($distancia, $rutas);
        echo "La ciudad que está a $distancia kms de Santander es $ciudad.";
    } elseif (isset($_POST['menores'])) {
        $limite = $_POST['limite'];
        $ciudadesMenores = ciudadesMenores($limite, $rutas);
        echo "Ciudades a menos de $limite kms de Santander: " . implode(', ', array_keys($ciudadesMenores));
    } elseif (isset($_POST['comprobar'])) {
        $ciudad = $_POST['ciudadComprobar'];
        $distancia = $_POST['distanciaComprobar'];
        echo comprobarDistancia($ciudad, $distancia, $rutas);
    } elseif (isset($_POST['todos'])) {
        mostrarTodasLasCiudades($rutas);
    } elseif (isset($_POST['limpiar'])) {
        // Limpiar el contenido de las cajas de texto
        $_POST['ciudad'] = $_POST['distancia'] = $_POST['limite'] = $_POST['ciudadComprobar'] = $_POST['distanciaComprobar'] = '';
    } elseif (isset($_POST['anadir'])) {
        // Añadir nuevos valores a la tabla
        $nuevaCiudad = $_POST['nuevaCiudad'];
        $nuevaDistancia = $_POST['nuevaDistancia'];

        if (!empty($nuevaCiudad) && is_numeric($nuevaDistancia)) {
            $rutas[$nuevaCiudad] = $nuevaDistancia;
        } else {
            echo "Por favor, ingresa una ciudad y una distancia válida.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancias</title>
</head>

<body>
    <h1>Distancias desde Santander</h1>
    <form action="" method="post">
        <p>Ciudad: <input type="text" name="ciudad" id="ciudad"></p>
        <p>Distancia (kms): <input type="number" name="distancia" id="distancia"></p>
        <input type="submit" value="Ver distancia" name="verDistancia">
        <input type="submit" value="Ver ciudad" name="verCiudad">
        <input type="submit" value="Menores" name="menores">
        <p>Límite: <input type="number" name="limite" id="limite"></p>
        <input type="submit" value="Comprobar" name="comprobar">
        <p>Ciudad: <input type="text" name="ciudadComprobar" id="ciudadComprobar"></p>
        <p>Distancia (aprox.): <input type="number" name="distanciaComprobar" id="distanciaComprobar"></p>
        <input type="submit" value="Todos" name="todos">
        <input type="submit" value="Limpiar" name="limpiar">
        <p>Nueva Ciudad: <input type="text" name="nuevaCiudad" id="nuevaCiudad"></p>
        <p>Nueva Distancia (kms): <input type="number" name="nuevaDistancia" id="nuevaDistancia"></p>
        <input type="submit" value="Añadir" name="anadir">
    </form>
</body>

</html>