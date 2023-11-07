<?php
	if (!empty($_POST['usuario']) || !empty($_POST['clave'])) { 	
		if($_POST['usuario'] == "usuario" and $_POST["clave"] == "1234") {		
			header("Location: loginprincipal.php");
		}else{
			$usuario=$_POST['usuario'];
			echo "<center><p>Usuario/contraseña incorrecto!</p></center>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>	
		<form action = "<?php echo $_SERVER["PHP_SELF"];?>" method = "POST" align="center">
			<p>
			<label for = "usuario">Usuario</label> 
			<input value = "<?php if(isset($usuario))echo $usuario;?>" id = "usuario" name = "usuario" type = "text">				
			</p>
			<p>
			<label for = "clave">Clave</label> 
			<input id = "clave" name = "clave" type = "password">			
			</p>
			<p>
			<input type = "submit">
			</p>
		</form>
	</body>
</html>