<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Cesta compra - POO</title>        
    </head>
    <body>        
        <form action='login.php' method='post'>
            <label>Usuario</label>
            <input type="text" name="name" ></input></br>
            <label>Contraseña</label>
            <input type="password" name="password" ></input></br>
            <input type="submit" name="enviar" value="Enviar"></input>            
        </form>             
        <?php
        require_once('include/DB.php');
        if (isset($_POST['enviar'])) {
            $usuario = $_POST['name'];
            $contrasena = $_POST['password'];
            // Para el usuario usaremos los introducidos en el form
			if (DB::verificaCliente($usuario, $contrasena)) {
				header("Location: productos.php");
			} else {
				echo"<p>Usuario no registrado</p>";
			}
        }
		?>
	</body>
</html>