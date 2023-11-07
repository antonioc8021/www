<!DOCTYPE html>
<html>
    <head>
	    <title>Apartado f</title>
    </head>
    <body>
	    <h2>Realizar un programa que intercambie el valor de dos variables. </h2>
	    <?php
		    $var1 = 5;
		    $var2 = 10;
		    print('los valores iniciales son para $var1=' . $var1 . ' para $var2=' . $var2 . '<br>');
		    print "los valores iniciales son para \$var1=  $var1  para \$var2=  $var2 <br>";
		    $aux  = $var1;
		    $var1 = $var2;
		    $var2 = $aux;
		    print('los valores despues del intercambio son para $var1=' . $var1 . ' para $var2=' . $var2);
	    ?>
    </body>
</html>