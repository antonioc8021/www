<?php
function validaFecha($mes, $dia, $ano)
{
    if (checkdate($mes, $dia, $ano)) {
        return "fecha correcta";
    } else {
        return "fecha incorrecta";
    }

}

echo (validaFecha(5, 24, 2002))
    ?>