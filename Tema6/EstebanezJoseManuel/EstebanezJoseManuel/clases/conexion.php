<?php

class DB
{
    private static $conexion;

    private static function conectar()
    {
        try {
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            $dsn = "mysql:host=localhost;dbname=pizzeria";
            $usuario = 'dwes';
            $contrasena = 'abc123.';
            self::$conexion = new PDO($dsn, $usuario, $contrasena, $opciones);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }
    public static function obtenerConexion()
    {
        if (!isset(self::$conexion)) {
            self::conectar();
        }

        return self::$conexion;
    }
    public static function ejecutaConsulta($sql)
    {
        if (!isset(self::$conexion)) {
            self::conectar();
        }

        try {
            $resultado = self::$conexion->query($sql);
            return $resultado;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }

}
?>
