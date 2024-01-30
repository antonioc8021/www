<?php
include "./clases/conexion.php";
include "./clases/pizza.php";
// no me funcioan el include DB y no entiendo pq
// include "./clases/DB.php.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Plantilla para Examen</title>
  <link href="dwes.css" rel="stylesheet" type="text/css">
  <style>
    .wrapper {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="wrapper">

    <div id="encabezado">
      <h1>Ejercicio: Pizzas</h1>
    </div>

    <div id="contenido">
      <h2>Carta de pizzas</h2>

      <div class="pizzas-list" action="" method="post">
        <?php
        foreach ($pizza as $pizzas) {
          ?>
          <div class="pizza-item">xºº
            <img src="./img/<?php echo $pizza->getFoto(); ?>.png" alt="<?php echo $pizza->getDescripcion(); ?>">
            <p>
              <?php echo $pizza->getDescripcion() ?>
            </p>f
            <form class="formu" action="" method="post">
              <input type="hidden" name="addPizza" value="<?php echo $pizza->getCodigo(); ?>">
              <input class="aniadir" type="submit" value="Añadir">
            </form>
          </div>
          <?php
        }
        ?>

        <br>
        <form action="" method="post">
          <input type="submit" name="modificarCarta" value="Modificar Carta">
        </form>
        <?php
        if (isset($_POST['modificarCarta'])) {
          header("Location: pizzas.php");
        }
        ?>

      </div>

      <div id="pie">
      </div>

    </div>
</body>

</html>