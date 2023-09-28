<?php
// consultar esta forma de hacerlo: (same that teacher);
// https://www.php.net/manual/es/function.checkdate


// my option it´s not the best;
function validaFecha($mes, $dia, $ano)
{
    if (checkdate($mes, $dia, $ano)) {
        return "fecha correcta";
    } else {
        return "fecha incorrecta";
    }

}

// by the teacher:
function comprobarFecha($fecha)
{
    $dia = (int) substr($fecha, 0, 2);
    $mes = (int) substr($fecha, 3, 2);
    $ano = (int) substr($fecha, 6, 4);

    return checkdate($mes, $dia, $ano);
}

echo ("<br>La fecha es: ");
$fecha = "30-05 -2020";
echo comprobarFecha($fecha) ? "correcta" : "incorrecta";

echo ("<br>La fecha es: ");
$fecha = "30-02-2020";
echo comprobarFecha($fecha) ? "correcta" : "incorrecta";
?>