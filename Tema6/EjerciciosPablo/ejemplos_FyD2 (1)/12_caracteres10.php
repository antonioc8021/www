<?php
// Lee los 10 primeros caracteres de cada línea de un 
// fichero de texto y los escribe en un nuevo fichero

$fichero = file("datos.txt");
$ficherorecortado = fopen('datosrecortados.txt', 'w');
foreach($fichero as $texto)
{
    $textorecortado =  substr(trim($texto),0,10);
    fwrite($ficherorecortado, $textorecortado."\n");
}
fclose($ficherorecortado);

?>
