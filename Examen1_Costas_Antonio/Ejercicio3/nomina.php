<!DOCTYPE html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Examen DWES</title>
    <link href="dwes.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php

    ?>

    <div id="encabezado">
        <h1>Ejercicio 3: Nómina</h1>
    </div>

    <div id="contenido">
        <form action="./nomina.php" method="post">
            <fieldset>
                <legend>Cáclculo de nómina</legend>
                <br>Sueldo base:
                <input type="number" id="sueldo" name="sueldo"><br>
                <p>Extras:
                    <input type="checkbox" id="noche" name="extras[]" value="noche">Noche</input>
                </p>
            </fieldset>
        </form>
    </div>

    <div id="pie">
    </div>

</body>

</html>