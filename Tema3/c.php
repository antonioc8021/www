<?php
for ($i = 100; $i < 1000; $i++) {
    $numeroStr = (string) $i;
    $numeroRevertido = strrev($numeroStr);
    if ($numeroStr === $numeroRevertido) {
        echo $i . "<br/>";
    }
}
?>