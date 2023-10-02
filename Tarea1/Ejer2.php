<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

    function combinaSin($n, $m)
    {
        $resultado = factorial($m) / (factorial($n) * factorial($m - $n));
        echo $resultado;
    }

    combinaSin(2, 7);

    ?>
</body>

</html>