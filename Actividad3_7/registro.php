<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer que acabará conmigo</title>
</head>

<body>
    <h2><b>Registro de productos</b></h2>
    <form action="registro.php" method="POST">
        Descripción: <input type="text" id="descripcion" name="descripcion" /><br><br>

        Clave de categoría: <select name="claveCategoria" id="claveCategoria">
            <option value="elegir"></option>
            <?php
            $codigo = ["INF", "JUV", "VET", "ALE", "CLASE_A", "CLASE_B", "CLASE_C"];
            foreach ($codigo as $key) {
                echo "<option value=$key>$key</option>";
            }
            ?>
        </select> <br><br>

        Precio <input type="number" id="precio" name="precio" /> €
        <br><br>

        Stock <input type="number" id="stock" name="stock" /> Ud.
        <br>

        <h4>Recargos</h4>
        <input type="checkbox" id="importacion" name="recargos">Importacion
        <input type="checkbox" id="diseno" name="recargos">Diseño
        <input type="checkbox" id="temporada" name="recargos">Temporada
        <input type="checkbox" id="piel " name="recargos">Piel<br>
        <input type="submit" id="enviar" value="enviar" name="enviar" />
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        if (empty($_POST['descripcion']) || empty($_POST['precio']) || empty($_POST['stock'])) {
            echo ('Se deben de rellenar todos los campos');
        } else {
            echo ("ej");
        }
        $descripcion = $_POST['descripcion'];
        $claveCategoria = $_POST['claveCategoria'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $recargos = $_POST['recargos'];

    }


    ?>
</body>

</html>