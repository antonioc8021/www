<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
        <link rel="stylesheet" media="screen" href="css/estilo.css" >
    </head>
    <body>
        <?php
            require_once 'funcionesBD.php';
            if(isset($_POST['traspasar']))
                {
                    $jugador = $_POST['jugador'];
                    //Datos del nuevo jugador
                    $nombre_jugador = $_POST['nombre_jugador'];
                    $procedencia_jugador = $_POST['procedencia_jugador'];
                    $altura_jugador = $_POST['altura_jugador'];
                    $peso_jugador = $_POST['peso_jugador'];
                    $posicion_jugador = $_POST['posicion_jugador'];
                    $equipo_jugador = $_POST['equipo_jugador'];

                    $correcto = borrarInsertarJugador($jugador, $nombre_jugador, $procedencia_jugador, $altura_jugador, $peso_jugador, $posicion_jugador, $equipo_jugador);

                    if($correcto)
                        echo "<div class='aviso'>Cambio de jugador realizado</div>";
                    else
                        echo "<div class='aviso'>ERROR!!!!</div>";
                }
        ?>
        <form class="formulario" action="" method="post" name="formulario">
            <ul>
                <li>
                    <h1>Traspasos de jugadores</h1>
                    <span class="mensaje_obligatorio">* Campo obligatorio</span>
                </li>

                <li>
                    <label for="equipo">Equipo:</label>
                    <select name="equipo" id="equipo">
                        <?php
                            $equipos = getEquipos();
                            foreach ($equipos as $equipo) 
                            {
                                echo "<option value='$equipo'";
                                //Si se ha recibido el equipo y coincide con el que estamos mostrando
                                //ponemos selected a true
                                if (isset($_POST['equipo']) && $equipo == $_POST['equipo'])
                                    echo " selected='true'";

                                echo ">$equipo</option>";
                            }
                        ?>
                    </select>
                </li>
                <li>
                    <button class="submit" type="submit" name="mostrar">Mostrar</button>
                </li>
            </ul>
        </form>
       
        <?php
            // Comprobamos si tenemos que mostrar los jugadores
            if (isset($_POST['mostrar'])) 
                {
        ?>
            <form class="formulario" action="" method="post" name="formulario">
                <ul>          
                    <li>
                        <h2>Baja y alta de jugadores:</h2>
                    </li>
                    <li>
                        <label for="jugador">Baja de jugador:</label>
                        <select name="jugador" id="jugador">
                            <?php

                                $jugadores = getJugadoresYPesoEquipo($_POST['equipo']);
                                foreach ($jugadores as $jugador) 
                                {
                                    echo "<option value='{$jugador['codigo']}'>{$jugador['nombre']}</option>";
                                }
                            ?>
                        </select>
                    </li>
                    <li>
                        <h3>Datos del nuevo jugador:</h3>
                    </li>
                    <li>
                        <label for="nombre_jugador">Nombre:</label>
                        <input type="text" name="nombre_jugador" id="nombre_jugador">
                    </li>
                    <li>
                        <label for="procedencia_jugador">Procedencia:</label>
                        <input type="text" name="procedencia_jugador" id="procedencia_jugador">
                    </li>
                    <li>
                        <label for="altura_jugador">Altura:</label>
                        <input type="number" placeholder="0.00" step=".01" name="altura_jugador" id="altura_jugador">
                    </li>
                    <li>
                        <label for="peso_jugador">Peso:</label>
                        <input type="number" placeholder="0.00" step=".01" name="peso_jugador" id="peso_jugador">
                    </li>
                    <li>
                        <label for="posicion_jugador">Posición:</label>
                        <select name="posicion_jugador" id="posicion_jugador">
                            <option value="F-G">F-G</option>
                            <option value="G-F">G-F</option>
                            <option value="C">C</option>
                            <option value="G">G</option>
                            <option value="F">F</option>
                            <option value="C-F">C-F</option>
                            <option value="C-F">F-C</option>
                        </select>
                    </li>
                    <input type="hidden" name="equipo_jugador" id="equipo_jugador" value="<?php echo $_POST['equipo']; ?>">
                    <li>
                        <button class="submit" type="submit" name="traspasar" id="traspasar">Realizar traspaso</button>
                    </li>
                </ul>
            </form>
        <?php
            }
        ?>		
    </body>
</html>