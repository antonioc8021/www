<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
        if ($j < $i) {
            echo " ";
        }
    }
    echo "\n";
}
?>