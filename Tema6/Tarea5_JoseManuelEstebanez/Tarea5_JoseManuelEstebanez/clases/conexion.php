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
    public static function preparada($idPedido,$fPago,$horaEntrega,$precioTotal )
    {
        try
        {
            $conn = DB::obtenerConexion();
            $conn->beginTransaction();
    
            $sqlPedido = "INSERT INTO pedido (numero, f_pago, fecha, importe) VALUES (:numero, :f_pago, :fecha, :importe)";
            $stmtPedido = $conn->prepare($sqlPedido);
            $stmtPedido->bindValue(':numero', $idPedido);
            $stmtPedido->bindValue(':f_pago', $fPago);
            $stmtPedido->bindValue(':fecha', $horaEntrega);
            $stmtPedido->bindValue(':importe', $precioTotal);
            $stmtPedido->execute();
    
    
            $sqlDetalle = "INSERT INTO detalle (id_pedido, id_pizza) VALUES (:id_pedido, :codigo_pizza)";
            $stmtDetalle = $conn->prepare($sqlDetalle);
    
            foreach ($_SESSION["pizzasSeleccionadas"]->getPizzas() as $pizza)
            {
                $stmtDetalle->bindValue(':id_pedido', $idPedido);
                $stmtDetalle->bindValue(':codigo_pizza', $pizza->getCodigo());
                $stmtDetalle->execute();
            }
    
            $conn->commit();
    
            session_destroy();
            echo ("<div class='lista'>TODO CORRECTO, REDIRIGIENDO A LA PAGINA DE INCIO</div>");
            header("Refresh: 3; URL=inicio.php");
            exit();
        }
        catch (PDOException $e)
        {
            $conn->rollBack();
            echo "<script>alert('Error al procesar el pedido. " . $e->getMessage() . "');</script>";
        }
    }
}
$conn = DB::obtenerConexion();
?>
