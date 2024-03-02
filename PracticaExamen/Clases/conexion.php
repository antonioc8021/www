<?php
class Conexion
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






}