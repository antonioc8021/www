<!DOCTYPE html>
<html>
    <head>
	    <title>Apartado i</title>
    </head>
    <body>
        <?php
            $a = 8;
            $b = 3;
            $c = 5;

            echo "($a == $b) && ($c > $b): ", ($a == $b) && ($c > $b) ? "si<br>":"no<br>";
            echo "($a == $b) || ($b == $c): ", ($a == $b) || ($b == $c) ? "si<br>":"no<br>";
            echo "($b <= $c): ", ($b <= $c) ? "si<br>":"no<br>";
        ?>
    </body>
</html>