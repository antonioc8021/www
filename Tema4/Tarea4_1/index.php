<?php
session_start();

function calcularMedia($temperaturas)
{
    return array_sum($temperaturas) / count($temperaturas);
}

if (!isset($_SESSION['ciudades'])) {
    $_SESSION['ciudades'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['calcular'])) {
        $ciudad = $_POST['ciudad'];
        $temperaturas = [
            $_POST['junio'],
            $_POST['julio'],
            $_POST['agosto']
        ];

        $media = calcularMedia($temperaturas);

        if ($media > 30) {
            $_SESSION['ciudades'][$ciudad] = $media;
        }
    } elseif (isset($_POST['listar'])) {
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
    <title>Tiempo</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ecf0f1;
            color: #2c3e50;
        }

        .cabecera {
            background-color: #3498db;
            text-align: center;
            padding: 20px;
            position: relative;
        }

        .sol {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: #f39c12;
        }

        h1 {
            margin: 0;
            color: white;
        }

        .cuerpo {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            color: #3498db;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        p {
            margin: 10px 0;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #3498db;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="cabecera">
        <h1>Antonio Costas Salazar</h1>
        <div class="sol">&#9728;</div>
    </div>

    <div class="cuerpo">
        <h3>Consulta del Tiempo</h3>

        <form action="" method="post">
            <p>Ciudad: <input type="text" name="ciudad" id="ciudad"></p>
            <p>Temp. Junio <input type="number" name="junio" id="junio">ºC</p>
            <p>Temp. Julio <input type="number" name="julio" id="julio">ºC</p>
            <p>Temp. Agosto <input type="number" name="agosto" id="agosto">ºC</p>
            <p>
                <input type="submit" value="Calcular" id="calcular" name="calcular">
                <input type="submit" value="Listar" name="listar" id="listar">
                <input type="submit" value="Cerrar" name="cerrar" id="cerrar">
            </p>
        </form>
    </div>
</body>

</html>