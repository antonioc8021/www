<?php 
    include_once("./funcionesVista.php");
    include_once("../Controlador/funcionesControlador.php");
    function checkExtension($nombre){
		//obtenemos la extension
		$nombre_des=explode(".",$nombre);
		$extension=end($nombre_des);
		//aqui podemos añadir las extensiones que deseemos permitir
        if($extension == "png")
			return TRUE;
		else	
			return FALSE;    
    }

    if (isset($_POST['add'])) {
        if(!empty($_POST["codigo"]) && !empty($_POST["descripcion"]) && !empty($_POST["tipo"]) && !empty($_POST["precio"]) &&!empty($_FILES["archivo"]['name'])) {
            $codigo = $_POST["codigo"];
            $descripcion = $_POST["descripcion"];
            $precio = $_POST["precio"];
            $tipo = $_POST["tipo"];

            $tamano = $_FILES["archivo"]['size'];
            $archivo = $_FILES["archivo"]['name'];
            $nombre=explode(".",$archivo);
            $prefijo = substr(md5(uniqid(rand())),0,6); // ---------- contruir un prefijo para evitar nombre repetidos
            $status ="";
            if (!checkExtension($archivo))
                $status=" - tipo incorrecto";
            else
            {	
                if($tamano > 100000) {                  // ---------- tamaño en bytes --------------------------------
                    $status="ERROR, demasiado grande";
                }
                else {
                    // guardamos el archivo a la carpeta física creada
                    $destino = "foto_pizzas/". $nombre[0] . ".png";
                    if(move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) {
                        insertarPizza($codigo, $descripcion, $precio, $tipo, $nombre[0]);
                    } else {
                        $status = "Error al subir el archivo";
                    }
                } 
            }
            echo $status."<br>";
        } else {
            echo("Tienes que rellenar todos los datos");
        } 
    }
    if (isset($_POST['eliminar'])) {
        if(!empty($_POST["codigo"])) {
            $codigo = $_POST["codigo"];
            eliminarPizza($codigo);
        }
        
    }
    if (isset($_POST['mostrar'])) {
        header("Location: ./carta.php");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
            <label for="codigo">Código: </label>
            <input type="text" name="codigo" id="codigo" maxlength="5">
            <br><br>
            <label for="descripcion">Descripción: </label>
            <input type="text" name="descripcion" id="descripcion" maxlength="20">
            <br><br>
            <label for="precio">Precio: </label>
            <input type="number" name="precio" id="precio" min="1">
            <br><br>
            <label for="tipo">Tipo: </label>
            <input type="text" name="tipo" id="tipo" maxlength="20">
            <br><br>
            <label for="archivo">Foto: </label>
            <input type="file" name="archivo" id="archivo">
            <br><br>
            <input type="submit" name="add" value="Añadir Pizza">
            <input type="submit" name="eliminar" value="Eliminar Pizza">
            <input type="submit" name="mostrar" value="Mostrar Carta">
        </form>
</body>
</html>