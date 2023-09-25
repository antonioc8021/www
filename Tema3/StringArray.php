<?php
$cadena = "Hola a todos!";
$cadena = str_split($cadena);
print('El array es: <br/>');
foreach ($cadena as $var) {
    print("$var <br/>");
}
?>