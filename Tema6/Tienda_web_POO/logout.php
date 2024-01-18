<?php    
	// Recuperamos la información de la sesión
    session_start();      
    // Y la eliminamos
	session_unset();
	// Redirigimos para solicitar nuevas credenciales
    header("Location: login.php");
?>

