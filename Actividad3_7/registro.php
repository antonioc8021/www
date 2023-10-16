<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer C</title>
</head>

<body>
    <form action="c.php">


        <select name="codigo" id="codigo">
            <option value="ELIGE">Elige una opción</option>
            <option value="INF">INF</option>
            <option value="JUV">JUV</option>
            <option value="VET">VET</option>
            <option value="ALE">ALE</option>
            <option value="CLASE_A">CLASE_A</option>
            <option value="CLASE_B">CLASE_B</option>
            <option value="CLASE_C">CLASE_C</option>
        </select>
        <br><br>
        <input type="checkbox" id="importacion" name="Importación">Importacion
        <input type="checkbox" id="diseno" name="Diseño">Diseño
        <input type="checkbox" id="temporada" name="Temporada">Temporada
        <input type="checkbox" id="piel " name="Piel">Piel

    </form>

    <?php
    $codigo = ["INF", "JUV", "VET", "ALE", "CLASE_A", "CLASE_B", "CLASE_C"];
    ?>
</body>

</html>