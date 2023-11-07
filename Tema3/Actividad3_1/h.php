<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
        if ($j < $i) {
            echo " ";
        }
    }
    echo "<br/>";
}
echo "Y otro que muestre: <br/>";

for ($i = 10; $i >= 1; $i--) {
    // Imprime números desde $i hasta 1 en cada fila
    for ($j = $i; $j >= 1; $j--) {
        echo $j;
        if ($j > 1) {
            echo " ";
        }
    }
    echo "<br/>";
}
?>