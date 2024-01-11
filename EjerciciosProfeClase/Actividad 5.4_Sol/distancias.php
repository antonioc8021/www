<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Distancias</title>
  <link rel="stylesheet" href="dwes.css">
</head>
<body>

<div id="encabezado">
	<h1>Ejercicio: Distancias</h1>
</div>

<div id="contenido">
<h2>Servicios de carreteras desde Santander</h2>

<?php
	session_start();

	$rutas = [
		"Oviedo"=>192,
		"Madrid"=>400,
		"Salamanca"=>360,
		"Toledo"=>520,
		"Lugo"=>390,
		"Sevilla"=>830,
		"Barcelona"=>825
	];

	if (isset($_SESSION["rutas"])) {
		$rutas = $_SESSION["rutas"];
	}

	function verDistancia($rutas, $ciudad) {
		if (array_key_exists($ciudad, $rutas)) { 
			echo "La ciudad de $ciudad tiene una distancia de: $rutas[$ciudad] Km<br>";
		} else {
			echo "$ciudad no existe en la base de datos. Introduce una ciudad valida<br>";    
		}
	}

	function verCiudad($rutas, $distancia) {
		if ($ciudad = array_search($distancia, $rutas)) {
			echo "La ciudad que está a $distancia Km de Santander es $ciudad<br>";
		} else {
			echo "No hay ninguna ciudad que diste $distancia Km de Santander<br>";    
		}
	}

	function menores($distancia,$rutas) {
		echo "Estas son las ciudades que se encuentran a menos de $distancia Km<br/>";
		foreach ($rutas as $ci => $dist) {
			if ($dist < $distancia) {
				echo "$ci a $dist Km<br/>";
			}
		}
	}

	function comprobar($rutas, $ciudad, $aprox) {
		$mensaje = "";
		$distanciaReal = 0;

		if (array_key_exists($ciudad, $rutas)) { 
			$distanciaReal = $rutas[$ciudad];

			if ($aprox > $distanciaReal) {
				$mensaje = "MENOR";
			} else if ($aprox < $distanciaReal){
				$mensaje = "MAYOR";
			} else {
				$mensaje = "IGUAL";
			}
			echo "$ciudad tiene una distancia $mensaje a la que has introducido<br>";
		} else {
			echo "$ciudad no existe en la base de datos. Introduce una ciudad valida<br>";     
		} 
	}

	function mostrarTodos($rutas) {
		echo "<table border='2' align='left'>";
		echo "<tr bgcolor=yellow>"; 
		echo "<th bgcolor=white> Ciudad </th>";
		foreach ($rutas as $ci => $dist) {
			echo "<td> $ci </td>";
		}
		echo "</tr>";
		echo"<tr bgcolor=green>"; 
		echo "<th bgcolor=white> Kms </th>";
		foreach ($rutas as $ci => $dist) {
			echo "<td> $dist </td>";
		}   
		echo "</tr>";
		echo "</table><br><br><br>";
	}   

	function anadir($rutas, $ciudad,$distancia) {
		if (!empty($ciudad) && !empty($distancia)){
			if (array_key_exists($ciudad, $rutas)) { 
				echo "$ciudad YA EXISTE en la base de datos. Introduce otra ciudad valida<br>";    
			} else {
				$rutas[$ciudad] = $distancia;   //se añade la nueva ciudad y la distancia en el array de $rutas
				echo "$ciudad introducida en la base de datos<br>";
			}       
		} else {
			echo "Para añadir un nuevo servicio de carreteras es necesario introducir los dos campos<br>";
		}
		return $rutas;  //devuelve el array mas el nuevo elemento tanto la ciudad como la distancia

	}

	if (isset($_POST["verDistancia"])) {
		$ciudad  = $_POST["ciudad"];
		verDistancia($rutas, $ciudad);
	}

	if (isset($_POST["verCiudad"])) {
		$distancia = $_POST["distancia"];
		verCiudad($rutas, $distancia);
	}

	if (isset($_POST["menores"])) {
		$distancia = $_POST["distancia"];
		menores($distancia,$rutas);
	} 

	if (isset($_POST["comprobar"])) {
		$ciudad = $_POST["ciudad"];
		$distanciaAprox = $_POST["distancia"];
		comprobar($rutas, $ciudad, $distanciaAprox); 
	}

	if (isset($_POST["todos"])) {
		mostrarTodos($rutas); 
	} 

	if (isset($_POST["nuevo"])) {
		$ciudad = $_POST["ciudad"];
		$distancia = $_POST["distancia"];

		$rutas = anadir($rutas, $ciudad, $distancia);//rutas es el array de rutas mas el nuevo elemento
		$_SESSION["rutas"] = $rutas;
	}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">   
    <p>Introduce una ciudad: <input type="text" name="ciudad"></p>
    <p>Introduce una distancia: <input type="text" name="distancia"></p>
    <div>
    <input type="submit" name="verDistancia" value="Ver Distancia">
    <input type="submit" name="verCiudad" value="Ver Ciudad">
    <input type="submit" name="menores" value="Menores"> 
    <input type="submit" name="comprobar" value="Comprobar">
    <input type="submit" name="todos" value="Todos">
    <input type="reset" name="limpiar" value="Limpiar">
    <input type="submit" name="nuevo" value="Añadir">
    </div>   
</form>  

</div>

<div id="pie">
</div>
</body>
</html>