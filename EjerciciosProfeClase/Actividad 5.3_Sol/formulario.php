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
if (!empty($_POST)){
    session_start();
    $_SESSION['Nombre'] = $_POST['Nombre'];
    $_SESSION['Correo'] = $_POST['Correo'];
	$_SESSION['Valoracion'] = $_POST['Valoracion'];
	echo "<h2>Datos introducidos en el formulario:</h2>";
	foreach ($_POST as $clave => $valor)
		if ($clave != "Enviar" && $clave != "Borrar")  
           echo "<p>".$clave.": ".$valor."</p>";
    echo "<p>El identificador de sesión es: ".session_id()."</p>"; 
	?>
	<p>Datos guardados en la sesión: <a href="conectado.php">siguiente pantalla</a></p>
	<?php
} // Fin del If inicial
 else {
	$valoracion = array("Muy mala","Mala","Regular","Buena","Muy buena");
	?>
	<h2>Valora nuestra web:</h2>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<p>Nombre: <input type="text" name="Nombre" /></p>
		<p>Correo: <input type="text" name="Correo" /></p>
		<p>Valoración:
		<?php
		foreach ($valoracion as $valor)
			echo "<input type='radio' name='Valoracion' value='".$valor."'>".$valor;
		?>
		</p>
		<p>Opinión:<br/>
		<textarea name="Opinion" rows="10" cols="40"></textarea></p>
		<input type="submit" name="Enviar" />&nbsp;&nbsp;&nbsp;
		<input type="reset" name="Borrar" />
	</form>
	<?php
 }
?>
</div>

<div id="pie">
</div>
</body>
</html>
