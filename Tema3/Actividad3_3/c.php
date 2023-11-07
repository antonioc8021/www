<?php
function factorial($number)
{
    if (is_numeric($number) == false) {
        return (-1);
    } else {

        $res = 1;
        for ($i = $number; $i > 0; $i--) {
            $res *= $i;
        }
        return $res;

    }

}
echo (factorial(30));
?>