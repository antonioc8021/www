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
?>