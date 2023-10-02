<?php
function isPrimo($n)
{
    if ($n > 1) {
        $primo = true;
        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                $primo = false;
                break;
            }
        }
    } else {
        $primo = false;
        return 'primo';
    }
}

function isCapicua($i)
{
    if ($i > 99 && $i < 100) {
        $centena = (int) ($i / 100);
        $unidad = $i % 10;
        if ($centena == $unidad) {
            $capicua = true;
        } else {
            $capicua = false;
        }
        return $capicua;
    } else {
        return false;
    }
}

function redondear($n)
{
    if (!is_float($n)) {
        return false;
    } else {
        $decimal = (int) ($n * 10) % 10;
        if ($decimal >= 5) {
            $n = (int) $n + 1;
        } else {
            $n = (int) $n;
        }
    }
}


// fecha en español:
function fecha()
{
    date_default_timezone_set('Europe/Madrid');
    $numero_mes = date("m");
    $numero_dia_semana = date("N");
    switch ($numero_mes) {
        case 1:
            $mes = "Enero";
            break;
        case 2:
            $mes = "Febrero";
            break;
        case 3:
            $mes = "Marzo";
            break;
        case 4:
            $mes = "Abril";
            break;
        case 5:
            $mes = "Mayo";
            break;
        case 6:
            $mes = "Junio";
            break;
        case 7:
            $mes = "Julio";
            break;
        case 8:
            $mes = "Agosto";
            break;
        case 9:
            $mes = "Septiembre";
            break;
        case 10:
            $mes = "Octubre";
            break;
        case 11:
            $mes = "Noviembre";
            break;
        case 12:
            $mes = "Diciembre";
            break;
    }
    switch ($numero_dia_semana) {
        case 1:
            $dia_semana = "Lunes";
            break;
        case 2:
            $dia_semana = "Martes";
            break;
        case 3:
            $dia_semana = "Miércoles";
            break;
        case 4:
            $dia_semana = "Jueves";
            break;
        case 5:
            $dia_semana = "Viernes";
            break;
        case 6:
            $dia_semana = "Sábado";
            break;
        case 7:
            $dia_semana = "Domingo";
            break;
    }
    print "Hoy es: " . $dia_semana . ", " . date("j") . " de " . $mes . " de " . date("Y");
}

function factorial($number)
{
    if (is_numeric($number) == false) {
        return (-1);
    } else {

        $res = 1;
        for ($i = $number; $i > 0; $i--) {
            $res *= $i;
        }
        return $res;
    }
}
?>