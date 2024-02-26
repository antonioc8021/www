<?php 
    include_once("./funcionesVista.php");
    if(isset($_POST["modificar"])) {
        header("Location: ./pizzas.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">    
    <header id="header" class="header">
    <h3>Carta de pizzas</h3>
    </header>
    <br><br>
        <div class="row">
            <?php
                mostrarPizzas();
            ?>
        </div>
        <br>
        <form action="" method="post">
        <input type="submit" name="modificar" value="Modificar Carta" class='btn btn-danger' style="margin-bottom:10px;">
        </form>
    </div>  
</body>
</html>