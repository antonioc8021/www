<?php
$numero = 99;
$res = 0;
if ($numero == 0) {
    $res = 1;
} else {
    $res = 1;
    for ($i = $numero; $i > 0; $i--) {
        $res *= $i;
    }
}
echo $res;
?>