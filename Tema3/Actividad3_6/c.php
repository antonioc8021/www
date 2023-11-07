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
            <option value="INF"></option>
            <option value="JUV"></option>
            <option value="VET"></option>
            <option value="ALE"></option>
            <option value="CLASE_A"></option>
            <option value="CLASE_B"></option>
            <option value="CLASE_C"></option>
            <option value=""></option>
            <br><br><br>
            <input type="checkbox" id="importacin" name="Importación">
            <input type="checkbox" id="diseno" name="Diseño">
            <input type="checkbox" id="temporada" name="Temporada">
            <input type="checkbox" id="piel " name="Piel">
        </select>

    </form>

    <?php
    $codigo = ["INF", "JUV", "VET", "ALE", "CLASE_A", "CLASE_B", "CLASE_C"];
    ?>
</body>

</html>