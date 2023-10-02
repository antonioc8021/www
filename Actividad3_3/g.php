<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>g de php</title>
</head>

<body>
    <?php
    function isPrimo($n)
    {
        if ($n > 1) {
            $primo = true;
            for ($i = 2; $i < $n; $i++) {
                if ($n % $i == 0) {
                    $primo = false;
                    break;
                }
            }
        } else {
            $primo = false;
            return 'primo';
        }
    }

    function isCapicua($i)
    {
        if ($i > 99 && $i < 100) {
            $centena = (int) ($i / 100);
            $unidad = $i % 10;
            if ($centena == $unidad) {
                $capicua = true;
            } else {
                $capicua = false;
            }
            return $capicua;
        } else {
            return false;
        }

    }

    $numero = 575;
    $primo = isPrimo($numero);
    if ($primo)
        echo "$numero es capicua<br>";
    ?>
</body>

</html>