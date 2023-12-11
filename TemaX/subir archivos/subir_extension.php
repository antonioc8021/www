<?php

function checkExtension($nombre){
		//obtenemos la extension
		$nombre_des=explode(".",$nombre);
		$extension=end($nombre_des);
		echo "extension obtenida: ".$extension;
		//aqui podemos añadir las extensiones que deseemos permitir
        $extensiones = array("jpg","jpeg","png","gif","pdf","JPG","php");
        if(in_array(strtolower($extension), $extensiones))
				return TRUE;
		else	
				return FALSE;
       
}
	
if (isset($_POST['enviar'])) {
	$tamano = $_FILES["archivo"]['size'];
	$tipo = $_FILES["archivo"]['type'];
	$archivo = $_FILES["archivo"]['name'];
	$prefijo = substr(md5(uniqid(rand())),0,6); // ---------- contruir un prefijo para evitar nombre repetidos

	if (!empty($archivo)) {
		if (!checkExtension($archivo))
			$status=" - tipo incorrecto";
		else
		{	
			if($tamano > 10000) {                  // ---------- tamaño en bytes --------------------------------
					$status="ERROR, demasiado grande";
			}
			else {
				// guardamos el archivo a la carpeta física creada
				$destino = "img/".$prefijo."_".$archivo;
				if( move_uploaded_file($_FILES['archivo']['tmp_name'],$destino)) {
					$status = "Archivo subido: <b>".$archivo."</b>";
				} else {
					$status = "Error al subir el archivo";
				}
			} 
		}
	}	
	else {
		$status = "Error falta fichero";
	}
	
	echo $status."<br>";
}
  
?>
Se necesita una carpeta <b>img</b>
 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
	<input name="archivo" type="file"  />
	<br>
	<input name="enviar" type="submit" value="Subir" />
</form>
