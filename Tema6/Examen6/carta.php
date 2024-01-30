<?php
include "./clases/conexion.php";


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

      <h1>NO SE NI RECORRER EL ARRAY PARA MOSTRAR FOTOS</h1>
      <H1>DESESPERACIÓN</H1>

      <div class="pizzas-list" action="" method="post">
        <?php
        foreach ($pizzas as $pizza) {
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


        <form action="" method="post">
          <input type="submit" name="modificarCarta" value="Modificar Carta">
        </form>
        <?php if (isset($_POST['modificarCarta'])) {
          header("Location: pizzas.php");
        } ?>

      </div>

      <div id="pie">
      </div>

    </div>
</body>

</html>