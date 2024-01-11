<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Valoración</title>
  <link rel="stylesheet" href="dwes.css">
</head>
<body>

<div id="encabezado">
	<h1>Ejercicio: Valoración</h1>
</div>

<div id="contenido">
<?php
session_start();
echo "<h2>Datos transportados en el array de sesión</h2>"; 
echo "<p>Identificador de sesión: ".session_id()."</p>"; 
echo "<p>Resto de los valores de la sesión:</p>";
foreach ($_SESSION as $clave => $valor){  
  echo "<p>".$clave.": ".$valor."</p>";
}
?>
</div>

<div id="pie">
</div>
</body>
</html>