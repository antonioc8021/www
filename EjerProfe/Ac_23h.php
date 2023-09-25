<!DOCTYPE html>
<html>
    <head>
	    <title>Apartado h</title>
    </head>
    <body>
        <?php
            $a = 8;
            $b = 3;
            $c = 5;

            echo "$a == $b: ", $a == $b ? "si<br>":"no<br>";
            echo "$a != $b: ", $a != $b ? "si<br>":"no<br>";
            echo "$a < $b: ", $a < $b ? "si<br>":"no<br>";
            echo "$a > $b: ", $a > $b ? "si<br>":"no<br>";
            echo "$a >= $c: ", $a >= $c ? "si<br>":"no<br>";
            echo "$a <= $c: ", $a <= $c ? "si<br>":"no<br>";
        ?>
    </body>
</html>