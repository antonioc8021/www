<!-- Examen Antonio Costas Salazar -->
<?php

session_start();

// creo un array vacío para los contactos de la agenda:
if (!isset($_SESSION['agenda'])) {
  $_SESSION['agenda'] = [];
}

// varibale para mostrar el listado:
$mostrar_listado = false;


function anadir($titular, $correo)
{
  if ((!empty($titular)) && (!empty($correo))) {
    if (array_key_exists($titular, $_SESSION['agenda'])) {
      echo "$titular YA EXISTE en la base de datos, introduce un titular válido";
    } else {
      $_SESSION['agenda'][$titular] = $correo;
      echo "El correo: $correo ha sido insertado correctamente";
    }
  } else {
    echo "Para poder añadir un nuevo usuario se debe de rellenar los dos campos";
  }
}


function eliminar($titular)
{
  if (!empty($titular)) {
    if (isset($_SESSION['agenda'][$titular])) {
      unset($_SESSION['agenda'][$titular]);
      print "Eliminado correctamente. <br>";
    } else {
      print "El usuario: $titular, no pudo ser eliminado <br>";
    }
  } else {
    echo "DEBES DE INDICAR UN TITULAR!!";
  }
}


function buscar($titular)
{
  if (!empty($titular)) {
    if (isset($_POST['buscar'])) {
      $titular = $_POST['titular'];
      if (array_key_exists($titular, $_SESSION['agenda'])) {
        $correo = $_SESSION['agenda'][$titular];
        echo "Titular -> $titular; Correo electrónico -> $correo.";
      } else {
        $correo = "AÚN NO HA SIDO GUARDADO EN LA AGENDA!";
        echo $correo;
      }
    }
  } else {
    echo "DEBES DE INDICAR UN TITULAR!!";
  }
}


function listado($contactos)
{
  $tamanoArray = sizeof($_SESSION['agenda']);
  if ($tamanoArray === 0) {
    echo "LA AGENDA ESTÁ VACÍA!!";
  } else {
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th> Titular </th>";
    echo "<th> Correo Electrónico </th>";
    echo "</tr>";
    foreach ($contactos as $titular => $correo) {
      echo "<tr>";
      echo "<td> $titular </td>";
      echo "<td> $correo </td>";
      echo "</tr>";
    }
    echo "</table>";
  }
}


function cerrar()
// destruye la sesion
{
  session_destroy();
  echo 'LA SESIÓN HA SIDO CERRADA';
}



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Examen DWES</title>
  <link rel="stylesheet" href="dwes.css">
</head>

<body>

  <div id="encabezado">
    <h1>Ejercicio: </h1>
  </div>

  <div id="contenido">
    <h2>Agenda de correos electrónicos</h2>
    <form action="" method="post">
      <p>Titular: <input type="text" name="titular"></p>
      <p>Email: <input type="email" name="correo"></p>
      <p>
        <input type="submit" value="Añadir" name="anadir">
        <input type="submit" value="Eliminar" name="eliminar">
        <input type="submit" value="Buscar" name="buscar">
        <input type="submit" value="Listado" name="listado">
        <input type="submit" value="CERRAR" name="cerrar">
      </p>
    </form>

    <?php

    if (isset($_POST['anadir'])) {
      $correo = $_POST['correo'];
      $titular = $_POST['titular'];
      anadir($titular, $correo);
    }

    if (isset($_POST['eliminar'])) {
      $titular = $_POST['titular'];
      eliminar($titular);
    }

    if (isset($_POST['buscar'])) {
      $titular = $_POST['titular'];
      buscar($titular);
    }

    if (isset($_POST['listado'])) {
      listado($_SESSION['agenda']);
    }

    if (isset($_POST['cerrar'])) {
      cerrar();
    }

    ?>

  </div>

  <div id="pie">
  </div>

</body>

</html>