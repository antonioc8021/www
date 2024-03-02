<?php
require_once 'conexionBD.php';

function getEquipos()
{
    $pdo = getConexion();
    $consulta = "select nombre from equipos";

    if ($resultado = $pdo->query($consulta)) {

        /* obtener el array de objetos */
        while ($equipo = $resultado->fetch(PDO::FETCH_OBJ)) {
            $equipos[] = $equipo->nombre;
        }
        unset($resultado);
    }
    unset($pdo);
    return $equipos;
}

function getJugadoresEquipo($equipo)
{
    $pdo = getConexion();
    $consulta = "select nombre, peso from jugadores where nombre_equipo = '$equipo'";

    if ($resultado = $pdo->query($consulta)) {

        while ($jugador = $resultado->fetch()) {
            $jugadores[] = $jugador["nombre"];
        }

        unset($resultado);
    }
    unset($pdo);
    return $jugadores;
}

function getJugadoresYPesoEquipo($equipo)
{
    $pdo = getConexion();
    $consulta = "select codigo, nombre, peso from jugadores where nombre_equipo = '$equipo'";

    if ($resultado = $pdo->query($consulta)) {

        while ($jugador = $resultado->fetch()) {
            $jugadores[] = array("codigo" => $jugador["codigo"], "nombre" => $jugador["nombre"], "peso" => $jugador["peso"]);
        }

        unset($resultado);
    }
    unset($pdo);
    return $jugadores;
}

function actualizarPesoJugadores($jugadores, $pesos)
{
    $pdo = getConexion();
    $sql = "update jugadores set peso = ? where codigo = ?";
    $sentencia = $pdo->prepare($sql);


    for ($i = 0; $i < count($jugadores); $i++) {
        $sentencia->bindParam(1, $pesos[$i]);
        $sentencia->bindParam(2, $jugadores[$i]);
        $sentencia->execute();
    }
    unset($sentencia);
    unset($pdo);
}

function getUltimoCodigoJugador()
{
    $pdo = getConexion();

    $sql = "select max(codigo) as codigo from jugadores";
    $resultado = $pdo->query($sql);
    $fila = $resultado->fetch();
    $codigo = $fila['codigo'];

    unset($pdo);

    return $codigo;
}

function borrarInsertarJugador($codigoJugadorBorrar, $nombre, $procedencia, $altura, $peso, $posicion, $equipo)
{

    $codigoNuevo = getUltimoCodigoJugador() + 1;

    $correcto = false;

    $pdo = getConexion();
    $pdo->beginTransaction();

    $sqlBorrarEstadisticas = "delete from estadisticas where jugador = ?";
    $sqlBorrarJugadores = "delete from jugadores where codigo = ?";
    $sqlInsertar = "insert into jugadores values (?,?,?,?,?,?,?)";


    $sentenciaBorrar = $pdo->prepare($sqlBorrarEstadisticas);
    $sentenciaBorrar->bindParam(1, $codigoJugadorBorrar);
    $sentenciaBorrar->execute();
    unset($sentenciaBorrar);

    $sentenciaBorrar = $pdo->prepare($sqlBorrarJugadores);
    $sentenciaBorrar->bindParam(1, $codigoJugadorBorrar);
    $elementosBorrados = $sentenciaBorrar->execute();
    unset($sentenciaBorrar);

    $sentenciaInsertar = $pdo->prepare($sqlInsertar);
    $sentenciaInsertar->bindParam(1, $codigoNuevo);
    $sentenciaInsertar->bindParam(2, $nombre);
    $sentenciaInsertar->bindParam(3, $procedencia);
    $sentenciaInsertar->bindParam(4, $altura);
    $sentenciaInsertar->bindParam(5, $peso);
    $sentenciaInsertar->bindParam(6, $posicion);
    $sentenciaInsertar->bindParam(7, $equipo);

    $elementosInsertados = $sentenciaInsertar->execute();
    unset($sentenciaInsertar);


    if ($elementosBorrados == 1 && $elementosInsertados == 1) {
        $pdo->commit();
        $correcto = true;
    } else {
        $pdo->rollback();
    }

    unset($pdo);
    return $correcto;
}
?>