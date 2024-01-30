<?php
require_once './conexion.php';
require_once './pizza.php';

class DB
{
    protected static function ejecutaConsulta($sql, $conexion)
    {
        $resultado = null;
        if ($conexion) {
            $resultado = $conexion->query($sql);
        }
        return $resultado;
    }

    public static function obtienePizzas($conexion)
    {
        $sql = "SELECT * FROM pizza";
        $resultado = self::ejecutaConsulta($sql, $conexion);
        $pizzas = array();
        if ($resultado) {
            while ($row = $resultado->fetch()) {
                $pizzas[] = new Pizza($row);
            }
        }
        return $pizzas;
    }
}
?>