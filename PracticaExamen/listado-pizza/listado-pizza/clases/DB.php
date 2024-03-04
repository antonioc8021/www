<?php

require_once 'pizza.php';


class DB {

   
	protected static function ejecutaConsulta($sql) {
		require'conexion.php';
		
		$resultado = null;
		if (isset($dwes)) {
			$resultado = $dwes->query($sql);
		}
		return $resultado;

    
    }

    public static function obtienePizzas() {
        $sql = "SELECT * FROM pizza";
        $resultado = self::ejecutaConsulta($sql);
        $pizzas = array();
        if ($resultado) {
            // Añadimos un elemento por cada pizza leida
            $row = $resultado->fetch();
            while ($row != null) {
                $pizzas[] = new Pizza($row);
                $row = $resultado->fetch();
            }
        }
        return $pizzas;
    }



}

?>