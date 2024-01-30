<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>

        <?php 
            require_once 'Monedero.class.php';
            $monedero1 = new Monedero(1000);
            echo "Hay creados ".Monedero::getNumeroMonederos() . " monederos<br />";
            $monedero1->sacarDinero(1200);
            $monedero1->mostrar();

            $monedero1->sacarDinero(200);
            $monedero1->mostrar();

            $monedero1->meterDinero(100);
            $monedero1->mostrar();

            $monedero2 = new Monedero(500);
            echo "Hay creados ".Monedero::getNumeroMonederos() . " monederos<br />";
        ?>
    </body>
</html>