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
            $peliculas = array("El pianista"=>"el_pianista.jpg",
                "El caballero oscuro"=>"el_caballero_oscuro.jpg",
                "Origen"=>"origen.jpg",
                "Memento"=>"memento.jpg",
                "El lobo de Wall Street"=>"el_lobo.jpg",
                "12 años de esclavitud"=>"esclavitud.jpg",
                "Spotlight"=>"spotlight.jpg",
                "Amelie"=>"amelie.jpg",
                "Malditos bastardos"=>"malditos_bastados.jpg",
                "No es país para viejos"=>"no_es_pais_para_viejos.jpg");
            if(isset($_POST["buscar"]) && $_POST['buscador']!=""){
                $contador =0;
                $html="<table class='tabla'>";
                
                $buscador = strtolower($_POST["buscador"]);
                foreach ($peliculas as $titulo=>$imagen) {
                    if(strpos(strtolower($titulo), $buscador)!==false){
                        $contador++;
                        $html.= "<tr><td><img src='pelis/$imagen' alt='$titulo'/></td>
								<td><h2>$titulo</h2></td></tr>";
                    }
                }

                $html.="</table>";
                if($contador>1){
                    echo "<div class='aviso'>$contador películas encontradas para la búsqueda \"$buscador\"</div>";
                    echo $html;
                }elseif ($contador==1){
                    echo "<div class='aviso'>1 película encontrada para la búsqueda \"$buscador\"</div>";
                    echo $html;
                }else{
                    echo "<div class='aviso'>No se han encontrado películas para la búsqueda \"$buscador\"</div>";
                }
            }
        ?>
    </body>
</html>