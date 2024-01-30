<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>
    <body>

        <?php 
            require_once 'Coche.class.php';
            //creo el objeto coche
            $coche = new Coche("0000-JJJ", 100);
            //muestro los valores del coche creado
            $coche->mostrar();
            // acelero y el coche ( no puede pasar de 120) y muestro su informacion
            $coche->acelera(50);
            $coche->mostrar();
            // freno el el coche  y muestro su información
            $coche->frena(100);
            $coche->mostrar();
            // vuelve a frenar y compruebo que no puede bajar de cero
            $coche->frena(70);
            $coche->mostrar();
        ?>

    </body>
</html>