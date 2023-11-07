<?php


//if you asigment any value to the argument it´s optional to put any new value. 
function potencia($num, $exponente = 2)
{
    return pow($num, $exponente);
}


echo (potencia(2, 3) . '<br>');
echo potencia(40)

    ?>