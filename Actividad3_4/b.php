<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function calcularLetraNIF($dni)
    {
        if (is_numeric($dni) && strlen($dni) == 8) {
            $resto = $dni % 23;
            $letras = "TRWAGMYFPDXBNJZSQVHLCKE";
            $letraNIF = $letras[$resto];
            return "El DNI es correcto y su letra del dni es: $letraNIF";
        } else {
            return "El DNI es incorrecto";
        }
    }
    echo calcularLetraNIF(72538930);
    ?>
</body>

</html>