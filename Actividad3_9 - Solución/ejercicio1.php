<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
        <link rel="stylesheet" media="screen" href="css/estilo.css" >
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="formulario">
            <ul>
                <li>
                    <h1>Buscador de películas</h1>
                </li>
                <li>
                    <label for="buscador">Buscador</label>
                    <input type="text" name="buscador" id="buscador">
                </li>
                <li>
                    <button class="submit" type="submit" name="buscar">Buscar</button>
                </li>
            </ul>
        </form>
        <?php
            $peliculas = array("El pianista", "El caballero oscuro", "Origen", "Memento", 
				"El lobo de Wall Street", "12 años de esclavitud", "Spotlight", "Amelie", 
				"Malditos bastardos", "No es país para viejos");
            if(isset($_POST["buscar"])){
                echo "<ul>";
                $buscador = strtolower($_POST["buscador"]);
                foreach ($peliculas as $peli){
                    if(strpos(strtolower($peli), $buscador)!==false){
                        echo "<li>$peli</li>";
                    }
                }
                echo "</ul>";
            }
        ?>
    </body>
</html>