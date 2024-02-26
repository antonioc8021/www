<?php 
    include_once("../Modelo/BD.php");
    include_once("../Controlador/Pizza.php");

    function obtenerPizzas() {
        $conexion = new BD("pizzeria", "dwes", "abc123.");
        $consulta = "SELECT * FROM pizza";
        $resultado = $conexion->realizarConsulta($consulta);
        $pizzas = [];
        if(!is_string($resultado)){
            while ($fila = $resultado -> fetch()){
                  array_push($pizzas, new Pizza($fila)); 
            }
            return $pizzas;
        } else {
            echo ("La consulta tiene el siguiente error: " . $resultado);
        }
        $conexion = null;
    }

    function insertarPizza($codigo, $descripcion, $precio, $tipo, $foto) {
        $conexion = new BD("pizzeria", "dwes", "abc123.");
        $consulta = "SELECT codigo from pizza where codigo like '$codigo'";
        $resultado = $conexion->realizarConsulta($consulta);
        $campo = $resultado->fetch();

        if($campo == null) {
            $consulta = "insert into pizza values('$codigo', '$descripcion', '$precio', '$tipo', '$foto')";
            $resultado = $conexion->realizarModificacion($consulta);
            if($resultado == 1) {
                echo("Pizza añadida con exito");
            }
        } else {
            echo("La pizza ya existe");
        }
    }
    function eliminarPizza($codigo) {
        $conexion = new BD("pizzeria", "dwes", "abc123.");
        $consulta = "SELECT codigo from pizza where codigo like '$codigo'";
        $resultado = $conexion->realizarConsulta($consulta);
        $campo = $resultado->fetch();

        if($campo == null) {
            echo("La pizza no existe");     
        } else {
            $consulta = "DELETE FROM pizza WHERE codigo LIKE '$codigo'";
            $resultado = $conexion->realizarModificacion($consulta);
            if($resultado == 1) {
                echo("Pizza eliminada con exito");
            }
        }
    }
?>