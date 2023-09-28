<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Fecha Actual en Castellano</title>
</head>

<body>
    <h1>Fecha Actual en Castellano</h1>

    <?php
    // Días de la semana en castellano
    $diasSemana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');

    // Meses en castellano
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

    // Obtener la fecha actual
    $fechaActual = date('d-m-Y');
    $numeroDiaSemana = date('w', strtotime($fechaActual));
    $numeroMes = date('n', strtotime($fechaActual));

    // Crear la cadena de fecha en castellano
    $fechaCastellano = $diasSemana[$numeroDiaSemana] . ', ' . date('j', strtotime($fechaActual)) . ' de ' . $meses[$numeroMes - 1] . ' de ' . date('Y', strtotime($fechaActual));

    echo '<p>' . $fechaCastellano . '</p>';
    ?>

</body>

</html>