<?php
    $x = -1;
    $y = 9;
    $suma = $x + $y; // no se puede llamar x e y falta el $
    print ("El valor de x es <i>$x<i>"); // no cierra las comillas y no pone el punto y coma
    //<br/> // error al poner una etiqueta html sin estar dentro de una función y con commillas
    print("El valor de y es <i>$y</i><br/>"); // error al no cerrar el paréntesis
    print("La suma es <b><i>$suma</i></b><br/>");
?>;
