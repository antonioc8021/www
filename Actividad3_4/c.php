<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>c</title>
</head>

<body>
    <!-- para que la tabla se vaya autogenerando con el php se debe de meter el php dentro de la etiqueta tabla como en el ejemplo -->
    <table align="left" border="7" cellpadding="3" cellspacing="2">
        <tr>
            <td>Nombre variable</td>
            <td>Valor</td>
        </tr>
        <?php
        foreach ($_SERVER as $conexion => $value) {
            echo "<tr>";
            echo "<td>$conexion</td>";
            echo "<td>$value</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>