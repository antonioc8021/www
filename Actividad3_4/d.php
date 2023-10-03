<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d</title>
</head>

<body>
    <?php
    function fecha()
    {
        $diasSemana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
        $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $fechaActual = date('d-m-Y');
        $numeroDiaSemana = date('w', strtotime($fechaActual));
        $numeroMes = date('n', strtotime($fechaActual));
        $fechaCastellano = $diasSemana[$numeroDiaSemana] . ', ' . date('j', strtotime($fechaActual)) . ' de ' . $meses[$numeroMes - 1] . ' de ' . date('Y', strtotime($fechaActual));
        echo '<p>' . $fechaCastellano . '</p>';
    }
    ?>

</body>

</html>