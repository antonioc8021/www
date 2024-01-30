<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>

        <?php 
            require_once 'Circulo.class.php';
            echo "creo el objeto con radio 10 <br />";
            $circulo = new Circulo(10);
            echo "El valor del radio es ". $circulo->radio."<br />";
            echo "cambio el valor del radio a 30 <br />";
            $circulo->radio = 30;
            echo "el nuevo valor del radio es ".$circulo->radio;
        ?>

    </body>
</html>