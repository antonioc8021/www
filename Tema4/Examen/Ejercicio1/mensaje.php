<?php

function mensaje($altura)
{
    if ($altura > 8500) {
        echo 'Más de 8500 metros';
    } elseif ($altura >= 8100) {
        echo 'Más de 8100 metros';
    } else {
        echo '8000 metros';
    }

}


?>