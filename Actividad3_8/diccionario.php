<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2.h2 {
            text-align: center;
        }

        input[type=submit] {
            margin: 17px;
        }

        input[type=text] {
            margin-right: 50px;
        }
    </style>
</head>

<body>
    <h2 class="h2">DICCIONARIO ESPAÑOL - INGLÉS</h2>

    <form action="./diccionario.php" method="post" style="border: 1px solid; border-radius: 8px; padding: 20px">
        Español: <input type="text" id="cajaEspanol" name="cajaEspanol">
        Inglés: <input type="text" id="cajaIngles" name="cajaIngles">
        <br> <br>
        <input type="submit" name="Anadir" value="Añadir">
        <input type="submit" name="eliminar" value="Eliminar">
        <input type="submit" name="buscarEspanol" value="Buscar-Español">
        <input type="submit" name="buscarIngles" value="Buscar-Inglés">
        <input type="submit" name="Listar" value="Listar">
    </form>

    <?php
    if (isset($_POST['anadir'])) {
        if (empty($_POST['cajaEspanol']) && empty($_POST['cajaIngles'])) {
            echo ("Para poder añadir debes de tener las dos cajas rellenadas");
        } else {
            $textoEspanol = array();
            array_push($textoEspanol, $_POST['cajaEspanol']);
            $textoIngles = $_POST['cajaIngles'];
            foreach ($textoEspanol as $texto) {
                return $texto;
            }
        }
    }
    ?>

</body>

</html>