<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Ejemplo: Mostrar fecha completa a partir de día, mes y año introducidos -->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>Fecha completa a partir de día, mes y año</title>
	</head>
	<body>
		<?php
			date_default_timezone_set('Europe/Madrid');
			if (!empty($_POST['dia']) && !empty($_POST['mes']) && !empty($_POST['anio'])) {
				if (checkdate($_POST['mes'],$_POST['dia'],$_POST['anio'])){
					$fecha = mktime(0,0,0,$_POST['mes'],$_POST['dia'],$_POST['anio']);
					$numero_dia_semana = date("N", $fecha);
					switch($_POST['mes']){
						case 1: $mes = "Enero";
							break;
						case 2: $mes = "Febrero";
							break;
						case 3: $mes = "Marzo";
							break;
						case 4: $mes = "Abril";
							break;
						case 5: $mes = "Mayo";
							break;
						case 6: $mes = "Junio";
							break;
						case 7: $mes = "Julio";
							break;
						case 8: $mes = "Agosto";
							break;
						case 9: $mes = "Septiembre";
							break;
						case 10: $mes = "Octubre";
							break;
						case 11: $mes = "Noviembre";
							break;
						case 12: $mes = "Diciembre";
							break;
					}
					switch($numero_dia_semana){
						case 1: $dia_semana = "Lunes";
							break;
						case 2: $dia_semana = "Martes";
							break;
						case 3: $dia_semana = "Miércoles";
							break;
						case 4: $dia_semana = "Jueves";
							break;
						case 5: $dia_semana = "Viernes";
							break;
						case 6: $dia_semana = "Sábado";
							break;
						case 7: $dia_semana = "Domingo";
							break;
					}
					echo "<p><center>".$dia_semana.", ".date("j", $fecha)." de ".$mes." de ".date("Y", $fecha)."</center></p>";
				}else
					print "<center><span style='color:red'>La fecha introducida no es correcta!!</span></center>";
			}
		?>
		<form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" align="center">
			<p>
			Dia:
			<input type="text" name="dia" value="<?php if(isset($_POST['dia'])) echo $_POST['dia'];?>" />
			<?php
				if (isset($_POST['enviar']) && empty($_POST['dia']))
					echo "<span style='color:red'> &lt;-- Debe introducir un día!!</span>"
			?></p>
			<p>
			Mes:
			<input type="text" name="mes" value="<?php if(isset($_POST['mes'])) echo $_POST['mes'];?>" />
			<?php
				if (isset($_POST['enviar']) && empty($_POST['mes']))
					echo "<span style='color:red'> &lt;-- Debe introducir un mes!!</span>"
			?></p>
			<p>
			Año:
			<input type="text" name="anio" value="<?php if(isset($_POST['anio'])) echo $_POST['anio'];?>" />
			<?php
				if (isset($_POST['enviar']) && empty($_POST['anio']))
					echo "<span style='color:red'> &lt;-- Debe introducir un año!!</span>"
			?></p>
			<p>
			<input type="submit" value="Enviar" name="enviar"/>
			</p>
		</form>
	</body>
</html>