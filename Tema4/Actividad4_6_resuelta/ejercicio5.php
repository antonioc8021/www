<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
        <link rel="stylesheet" media="screen" href="css/estilo.css" >
    </head>
    <body>
        <form class="formulario" action="" method="post" name="formulario">
            <ul>
                <li>
                    <h1>Jugadores de la NBA</h1>
                    <span class="mensaje_obligatorio">* Campo obligatorio</span>
                </li>

                <li>
                    <label for="equipo">Equipo:</label>
                    <select name="equipo" id="equipo">
                        <?php
                            require_once 'funcionesBD.php';

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
                <table class="tabla">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            $equipo = $_POST['equipo'];
                            $jugadores = getJugadoresEquipo($equipo);
                            foreach ($jugadores as $jugador) 
                            {
                                echo "<tr><td>$jugador</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
        <?php
                }
        ?>		
    </body>
</html>