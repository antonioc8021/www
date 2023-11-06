<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Examen DWES</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php

    ?>

    <div id="encabezado">
        <h1>Ejercicio 3: Nómina</h1>
    </div>

    <div id="contenido">
        <form action="./nomina.php" method="post">
            <fieldset>
                <legend>Cáclculo de nómina</legend>
                <br>Sueldo base:
                <input type="number" id="sueldo" name="sueldo"><br>
                <p>Extras:
                    <input type="checkbox" id="noche" name="extras[]" value="noche">Noche</input>
                    <input type="checkbox" id="festivos" name="extras[]" value="festivos">Festivo</input>
                    <input type="checkbox" id="horas extras" name="extras[]" value="horas extras">Horas</input>
                    <input type="checkbox" id="peligro" name="extras[]" value="peligro">Peligro</input>
                </p>
                <p>Hijos:
                    <input type="radio" name="hijos[]" id="uno" value="uno">1</input>
                    <input type="radio" name="hijos[]" id="dos" value="dos">2</input>
                    <input type="radio" name="hijos[]" id="tres" value="tres">3 o más</input>
                </p>
                <input type="reset" id="limpiar" , value="Limpiar" , name="limpiar" />
                <input type="submit" id="calcular" , value="Calcular" , name="calcular" />
            </fieldset>
        </form>
    </div>

    <?php
    if (isset($_POST["calcular"])) {
        if ((empty($_POST['sueldo'])) || (empty($_POST['extras'])) || (empty($_POST['hijos']))) {
            echo 'Alguno de los elementos está vacío';
        } else {
            $tabla = array(
                'noche' => 100,
                'festivos' => 50,
                'horas extras' => 50,
                'peligro' => 150
            );
            $sueldo = $_POST['sueldo'];
            $extras = [];
            $extras = $_POST['extras'];
            $hijos = [];
            $hijos = $_POST['hijos'];
        }

        function calculaPrecio($sueldo, $extras, $hijos, $tabla)
        {
            $precioExtras = 0;
            foreach ($extras as $extras) {
                foreach ($tabla as $tablaExtra => $precio) {
                    if ($extras == $tablaExtra) {
                        $precioExtras += $precio;
                    }
                }
            }
            $precioHijos = 0;
            foreach ($hijos as $hijos) {
                if ($hijos == 'uno') {
                    $precioHijos += 20;
                } elseif ($hijos == 'dos') {
                    $precioHijos += 40;
                } elseif ($hijos == 'tres') {
                    $precioHijos += 60;
                } else {
                    echo 'falla el precio';
                }
            }
            echo ('Total a recibir: (' . $sueldo . '€ + ' . $precioExtras . '€ + ' . $precioHijos . '€) = ' . ($sueldo + $precioExtras + $precioHijos));

        }
        calculaPrecio($sueldo, $extras, $hijos, $tabla);
    }

    ?>

    <div id="pie">
    </div>

</body>

</html>