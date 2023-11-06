<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
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
            $peliculas = array(
                array("titulo"=>"El pianista", "imagen"=>"el_pianista.jpg"),
                array("titulo"=>"El caballero oscuro", "imagen"=>"el_caballero_oscuro.jpg"),
                array("titulo"=>"Origen", "imagen"=>"origen.jpg"),
                array("titulo"=>"Memento", "imagen"=>"memento.jpg"),
                array("titulo"=>"El lobo de Wall Street", "imagen"=>"el_lobo.jpg"),
                array("titulo"=>"12 años de esclavitud", "imagen"=>"esclavitud.jpg"),
                array("titulo"=>"Spotlight", "imagen"=>"spotlight.jpg"),
                array("titulo"=>"Amelie", "imagen"=>"amelie.jpg"),
                array("titulo"=>"Malditos bastardos", "imagen"=>"malditos_bastados.jpg"),
                array("titulo"=>"No es país para viejos", "imagen"=>"no_es_pais_para_viejos.jpg"),
            );

            if(isset($_POST["buscar"]) && $_POST['buscador']!="")
            {
                $contador =0;
                $html="<table class='tabla'>";               
                $buscador = strtolower($_POST["buscador"]);
                foreach ($peliculas as $peli) {
                    if(strpos(strtolower($peli["titulo"]), $buscador)!==false)
                    {
                        $contador++;
                        $html.= "<tr><td><img src='pelis/{$peli['imagen']}' alt='{$peli['titulo']}'/></td><td><h2>{$peli['titulo']}</h2></td></tr>";
                    }
                }
                $html.="</table>";
                if($contador>1)
                {
                    echo "<div class='aviso'>$contador películas encontradas para la búsqueda \"$buscador\"</div>";
                    echo $html;
                }
                elseif ($contador==1) {
                    echo "<div class='aviso'>1 película encontrada para la búsqueda \"$buscador\"</div>";
                    echo $html;
                }
                else
                {
                    echo "<div class='aviso'>No se han encontrado películas para la búsqueda \"$buscador\"</div>";
                }
            }
        ?>
    </body>
</html>