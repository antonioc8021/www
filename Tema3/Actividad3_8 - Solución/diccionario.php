<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Diccionario Español-Inglés</title>
        <style type="text/css">
            h2{text-align: center;}
            form{border: 1px solid grey; border-radius: 10px; width: 500px; padding: 20px; margin: 20px auto;}
            .campo{margin: 10px 20px 30px 30px; float: left;}
            .btn{margin-left: 20px;}
            .botones{clear: left; content: ''; text-align: center;}
            .datos{border: 1px solid ; border-radius: 10px; text-align: center; width: 400px; margin: 20px auto; color: green}
            table{text-align: center; margin: 20px auto;}
            li{text-align: justify; margin-left: 105px;}
        </style>
    </head>
    <body>
        <h2>Diccionario Español - Inglés</h2>
        
        <?php 
            //incluir el fichero con las funciones
            include_once 'diccionario_funciones.php';
            
            //definimos la variable para guardar el diccionario
            $diccionario = array();
        ?>
        
        <div class="datos">
            <?php
                //Si el array "diccionario" con las palabras no esta vacío, lo decodifica 
                if (!empty($_POST['diccionario'])) {
                    $diccionario = unserialize(base64_decode($_POST['diccionario']));
                //Si esta vacío mostramos el aviso
                }else{
                    echo '<p>No existen datos en el diccionario</p>';
                }
                
                //Si hemos pulsado en "Añadir" llamamos a la funcion para guardar la palabra
                if (!empty($_POST['aniadir'])) {
                    guardar_palabra($_POST['espaniol'], $_POST['ingles'], $diccionario);
                }
                
                //Si hemos pulsado en "Eliminar" llamamos a la función para eliminar la palabra
                if (!empty($_POST['eliminar'])) {
                    eliminar_palabra($_POST['espaniol'], $diccionario);
                }
                
                //Si hemos pulsado en "Buscar-Español" llamamos a la función para buscar la palabra
                if (!empty($_POST['buscar_espaniol'])) {
                    buscar_espaniol($_POST['espaniol'], $diccionario);
                }
                
                //Si hemos pulsado en "Buscar-Inglés" llamamos a la función para buscar la palabra
                if (!empty($_POST['buscar_ingles'])) {
                    buscar_ingles($_POST['ingles'], $diccionario);
                }
                
                //Si hemos pulsado en "Listar" llamamos a la función para listar palabras
                if (!empty($_POST['listar'])) {
                    listar_palabra_ar($diccionario);
                }
            ?>
        </div>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <!-- Guardamos el array "diccionario" oculto y codificado -->
            <input type="hidden" name="diccionario" value="<?php echo base64_encode(serialize($diccionario));?>"/>
            <div class="campo">
                <label for="espaniol">Español:</label>
                <input type="text" name="espaniol" size="15"/>
            </div>
            
            <div class="campo">
                <label for="ingles">Ingles:</label>
                <input type="text" name="ingles" size="15"/>
            </div>
            <div class="botones">
                <input class="btn" type="submit" name="aniadir" value="Añadir"/>
                <input class="btn" type="submit" name="eliminar" value="Eliminar"/>
                <input class="btn" type="submit" name="buscar_espaniol" value="Buscar-Español"/>
                <input class="btn" type="submit" name="buscar_ingles" value="Buscar-Inglés"/>
                <input class="btn" type="submit" name="listar" value="Listar"/>
            </div>
        </form>
        <?php
            if (!empty($diccionario)) {
        ?>
                <table>
                    <thead>
                        <tr>
                            <td>ESPAÑOL</td>
                            <td>INGLÉS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        mostrar_diccionario($diccionario);
                        ?>
                    </tbody>
                </table>
        <?php
            }
        ?>
    </body>
</html>
