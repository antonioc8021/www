<?php

    require_once 'Cuenta.class.php';
    require_once 'CuentaCorriente.class.php';
    require_once 'CuentaAhorro.class.php';


    $c = new CuentaCorriente("001", "Pepe", 1000, 15);
    echo $c->mostrar();
    echo "<br />";
    $c->reintegro(1500);
    echo "<br />";

    if($c instanceof Cuenta)
        echo "Tipo Cuenta<br/>";

    if($c instanceof CuentaCorriente)
        echo "Tipo CuentaCorriente<br />";

    echo "La clase padre es: " . get_parent_class($c)."<br />";
    //creacion del objeto
    $cuentaIntereses = new CuentaAhorro("002", "jose", 1000, 100, 5);
    echo $cuentaIntereses->mostrar();
    echo "<br />";
    //aplico los intereses
    $cuentaIntereses->aplicaInteres();
    echo $cuentaIntereses->mostrar();
    echo "<br />";
?>
