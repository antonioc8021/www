<!DOCTYPE html>
<html>
    <head>
	    <title>Apartado g</title>
    </head>
    <body>
	    <h2>Realizar un programa que desglose una cantidad de euros en billetes de 10 y 5 y monedas de 1 euro. </h2>
	    <?php
		    $dinero=67;
		    print("En $dinero hay: <br>");
		    $billetes_10= floor($dinero/10); //tambien se puede hacer ceil($dinero/10)-1;
		    print("- $billetes_10 billetes de 10<br>");
		    $dinero=($dinero % 10);
		    $billetes_5= floor($dinero/5);
		    print("- $billetes_5 billetes de 5<br>");
		    $dinero =($dinero % 5);
		    print("- $dinero monedas de 1<br>");
	    ?>
    </body>
</html>