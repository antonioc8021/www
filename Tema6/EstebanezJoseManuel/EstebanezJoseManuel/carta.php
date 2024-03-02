<?php
include("./clases/conexion.php");
include("./clases/pizza.php");
session_start();

$sql = "SELECT * from pizza ORDER BY codigo;";
$consulta = DB::ejecutaConsulta($sql);
$pizzas = [];

while ($fila = $consulta->fetch()) {
    $pizza = new Pizza($fila["codigo"], $fila["descripcion"], $fila["precio"], $fila["tipo"], $fila["foto"]);
    $pizzas[] = $pizza;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Encargo de Pizzas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="body2">

    <h1>Carta de pizzas</h1>
    <div class="pizzas-list" action="" method="post">
        <?php
        foreach ($pizzas as $pizza) {
            ?>
            <div class="pizza-item">
                <img src="./img/<?php echo $pizza->getFoto(); ?>.png" alt="<?php echo $pizza->getDescripcion(); ?>">
                <br>
                <?php echo $pizza->getCodigo() ?>
                <br>
                <?php echo $pizza->getDescripcion() ?>
                <br>
                <?php echo $pizza->getPrecio() ?>€
            </div>
            <?php
        }
        ?>
    </div>
    <div class="form2">
        <form action="./pizzas.php" method="post">
            <input type="submit" name="confirmar" value="Modificar carta">
        </form>
    </div>
</body>

</html>