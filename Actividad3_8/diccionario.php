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
        Inglés: <input type="text" id="cajaEspanol" name="cajaEspanol">
        <br> <br>
        <input type="submit" name="enviar" value="Enviar">
        <input type="submit" name="enviar" value="Eliminar">
        <input type="submit" name="enviar" value="Buscar-Español">
        <input type="submit" name="enviar" value="Buscar-Inglés">
        <input type="submit" name="enviar" value="Listar">

    </form>


</body>

</html>