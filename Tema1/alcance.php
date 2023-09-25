<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function PruebaSinGlobal()
    {
        $var = 0;
        $var++;
        echo "Prueba sin global. \$var: " . $var . "<br>";
    }
    function PruebaConGlobal()
    {
        global $var;
        $var++;
        echo "Prueba con global. \$var: " . $var . "<br>";
    }
    function PruebaConGlobals()
    {
        $GLOBALS["var"]++;
        echo "Prueba con GLOBALS. \$var: " . $GLOBALS["var"] . "<br>";
    }
    $var = 20; //variable de prueba
    PruebaSinGlobal();
    print "\$var=" . $var . "<br>";
    PruebaConGlobal();
    print "\$var=" . $var . "<br>";
    PruebaConGlobals();
    print "\$var=" . $var . "<br>";
    ?>
</body>

</html>