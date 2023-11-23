<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 8</title>
        <link rel="stylesheet" media="screen" href="css/estilo.css" >
    </head>
    <body>
        <?php
            require_once 'funcionesBD.php';
            if(isset($_POST["actualizar"]))
            {
                $jugadores = $_POST["jugadores"];
                $pesos = $_POST["pesos"];
                actualizarPesoJugadores($jugadores, $pesos);
                echo "<div class='aviso'>Actualizados los pesos</div>";
            }
        ?>
        <form class="formulario" action="" method="post" name="formulario">
            <ul>
                <li>
                    <h1>Jugadores de la NBA</h1>
                    <span class="mensaje_obligatorio">* Campo obligatorio</span>
                </li>

                <li>
                    <label for="equipo">Equipo:*</label>
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
                    <button class="submit" type="submit" name="mostrar" id="mostrar">Mostrar</button>
                </li>
            </ul>
        </form>

        
        <?php
            // Comprobamos si tenemos que mostrar los jugadores
            if (isset($_POST['mostrar'])) 
                {
        ?>
            <form id="actualizarPeso" method="post" action="">
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php                    
                            $equipo = $_POST['equipo'];
                            $jugadores = getJugadoresYPesoEquipo($equipo);
                            foreach ($jugadores as $jugador) 
                            {
                                echo "<input type='hidden' name='equipo' value='{$_POST['equipo']}'>"; //Para que se mantenga al recargar la página
                                echo "<tr>"."<input type='hidden' name='jugadores[]' value='{$jugador['codigo']}'>";
                                echo "<td>".$jugador["nombre"]."</td>";
                                echo "<td><input type='text' size='4' name='pesos[]' value='{$jugador['peso']}'> kg </td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
                <button class="submit actualizar" type="submit" name="actualizar">Actualizar</button>
            </form>
        <?php
            }
        ?>		            
    </body>
</html>