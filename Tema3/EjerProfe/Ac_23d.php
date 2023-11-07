<!DOCTYPE html>
<html>
    <head>
        <title>Apartado d: Tipos de datos</title>
    </head>
    <body>
        <?php
            $temporal = "juan";
            echo "El tipo de la variable es: ".gettype($temporal).".<br/>";
            $temporal = 3.14;
            echo "El tipo de la variable es: ".gettype($temporal).".<br/>";
            $temporal = false;
            echo "El tipo de la variable es: ".gettype($temporal).".<br/>";
             $temporal = 3;
            echo "El tipo de la variable es: ".gettype($temporal).".<br/>";
            $temporal = null;
            echo "El tipo de la variable es: ".gettype($temporal).".<br/>";
        ?>
    </body>
</html>