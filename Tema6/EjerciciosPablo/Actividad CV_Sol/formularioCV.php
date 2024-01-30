<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ejercicio CV</title>
	<style type="text/css">
		fieldset {border-color: blue;
					width: 60%;}
		#annio{width: 50px;}		
		#apellidos{margin-top: 10px;}
	</style>
</head>
	<body>
	<div id="encabezado">
			<h1>Envía tu CV</h1>
		</div>
	<?php
	$arrayMes = array("enero","febrero","marzo","abril","mayo","junio","julio",
						"agosto","septiembre","octubre","noviembre","diciembre");
	$status="";
	function checkExtension($nombre)
	{
			//obtenemos la extension
			$nombre_des=explode(".", $nombre);
			$extension=end($nombre_des); //divide el nombre en dos cadenas separados por el punto, 
										 //end selecciona el ultimo elemento del array  la extension
			echo "extension obtenida: ".$extension. "</br>";
			$extension =strtolower($extension);
			//aqui podemos añadir las extensiones que deseemos permitir
			$extensiones = "pdf"; //solo puede tener extension
			if($extension === $extensiones)
					return TRUE;
			else	
					return FALSE;
		
	}
	
	if (isset($_POST['enviar']) && !empty($_POST['nombre']) && !empty($_POST['apellidos']) 
		&& !empty($_POST['dni']) && !empty($_POST['dia']) && !empty($_POST['annio']) && 
		!empty($_POST['email'])) 
	{
		$tamano = $_FILES["archivo"]['size'];
		$tipo = $_FILES["archivo"]['type'];
		$archivo = $_FILES["archivo"]['name'];
		$prefijo = substr(md5(uniqid(rand())),0,6); // ------- prefijo para evitar nombre repetidos

		if (!empty($archivo)) {
			if (!checkExtension($archivo))
				$status="Error: tipo incorrecto, solo pueden ser archivos con extension .pdf";
			else
			{	
				if($tamano > 1000000) {                  // //1MB ------ tamaño en bytes ----------
						$status="Error: archivo demasiado grande";
				}
				else {
					// guardamos el archivo a la carpeta física creada
					$destino = "cvs/".$prefijo."_".$archivo;
					if( move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) {
						print"<fieldset>";
						print"<legend>Datos personales</legend>";
						print "<label>Nombre:</label> ".$_POST['nombre']."<br/>";
						print "<label>Apellidos:</label> ".$_POST['apellidos']."<br/>";
						print "<label>DNI:</label> ".$_POST['dni']."<br/>";
						print "<label>Fecha de nacimiento</label> ".$_POST['dia']."" .
								$_POST['mes']." ".$_POST['annio']."</br>";
						print "<label>Correo electrónico:</label> ".$_POST['email']."<br/>";
						print "<br/>";
						print "Archivo subido: <b>".$archivo."</b>";
						print"<br></fieldset/>";
						
						header('Refresh: 10; URL=formularioCV.php');
						
					} else {
						$status = "Error al subir el archivo";
					}
				} 
			}
		}	
		else {
			$status = "Error: falta fichero";
		}
		
		echo $status."<br>";
}else{
  
?>
<!-- Se necesita una carpeta <b>cvs</b> -->
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
	<fieldset>
	<legend>Datos personales</legend>
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="<?php if(!empty($_POST['nombre'])) echo $_POST['nombre'];?>">
	<?php
	if (isset($_POST['enviar']) && empty($_POST['nombre']))
					echo "<span style='color:red'> &lt;-- Debe introducir un nombre!!</span>";
	?></br>
	<label for="apellidos">Apellidos:</label>
	<input type="text" name="apellidos" id="apellidos" 
			value="<?php if(!empty($_POST['apellidos'])) echo $_POST['apellidos'];?>">
	<?php
	if (isset($_POST['enviar']) && empty($_POST['apellidos']))
					echo "<span style='color:red'> &lt;-- Debe introducir los apellidos!!</span>";
	?></br>
	<label for="dni">DNI:</label></br>
	<input type="text" name="dni" pattern="[0-9]{8}[A-Za-z]{1}" 
			title="Debe poner 8 números y una letra" 
			value="<?php if(!empty($_POST['dni'])) echo $_POST['dni'];?>">
	<?php
	if (isset($_POST['enviar']) && empty($_POST['dni']))
					echo "<span style='color:red'> &lt;-- Debe introducir un dni!!</span>";
	?></br>
	<label for="fecha">Fecha de nacimiento:</label></br>
	<input type="number" name="dia" min="1" max="31" 
			value="<?php if(!empty($_POST['dia'])) echo $_POST['dia'];?>">	
	<?php
	if (isset($_POST['enviar']) && empty($_POST['dia']))
					echo "<span style='color:red'> &lt;-- Debe introducir un dia!!</span>";
	?>
	<select name="mes">
	<?php
	foreach($arrayMes as $mes){
		echo "<option value='$mes'>$mes</option>";

	}
	?>
	</select>	
	<input type="text" name="annio" id="annio" 
			value="<?php if(!empty($_POST['annio'])) echo $_POST['annio'];?>"/>
	<?php
	if (isset($_POST['enviar']) && empty($_POST['annio']))
					echo "<span style='color:red'> &lt;-- Debe introducir un año!!</span>";
	?></br>
	<label for="sexo">Sexo:</label></br>
	<input type="radio" name="sexo" id="hombre" value="hombre"/>
	<label for="hombre">Hombre</label>
	<input type="radio" name="sexo" id="mujer" value="mujer"/>
	<label for="mujer">Mujer</label></br>
	<label for="email">Correo electrónico:</label></br>
	<input type="email" name="email"  
		pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" 
		value="<?php if(!empty($_POST['email'])) echo $_POST['email'];?>">
	<?php
	if (isset($_POST['enviar']) && empty($_POST['email']))
					echo "<span style='color:red'> &lt;-- Debe introducir un correo!!</span>";
	?></br>
	</br>
		Envio de CV: <input name="archivo" type="file"  />
		<?php
		echo "<span style='color:red'><b>$status</b></span>";
		?>
		</br>
		</br><input name="enviar" type="submit" value="Guardar cambios" />
		<input name="borrar" type="reset" value="Borrar los datos introducidos" />
	</fieldset>		
	</form>
	<?php
	}	
	
	?>
</body>
</html>
