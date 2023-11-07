<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    < <?php
    $numero = 7;
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        $res = $numero * $i;
        if ($i % 2 == 0) {
            $color = "red";
        } else {
            $color = "blue";
            echo "<tr bgcolor = $color>";
            echo "<td> $numero</td>";
            echo "<td>x</td>";
            echo "<td>i</td>";
            echo "<td>=</td>";
            echo "<td>$res</td>";
            echo "</tr>";


        }
    }
    echo "</table>";

    ?>
</body>

</html>