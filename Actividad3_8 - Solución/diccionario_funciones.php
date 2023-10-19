<?php 

    //función para añadir pares de palabras
    function guardar_palabra($espaniol, $ingles, &$diccionario) {
        if (!empty($espaniol) && !empty($ingles)) {
            if (!array_key_exists($espaniol, $diccionario)) {
                $diccionario[$espaniol] = $ingles;
            echo '<p>Las palabras han sido guardadas en el diccionario</p>';

            } else {
                echo '<p>Las palabras ya existen en el diccionario</p>';
            }
        } else {
            echo '<p>Debes rellenar los dos campos</p>';
        }
    }

    //función para borrar las palabras del diccionario 
    function eliminar_palabra($espaniol, &$diccionario) {
        if (!empty($espaniol)) {
            if (array_key_exists($espaniol, $diccionario)) {
                unset($diccionario[$espaniol]);
                echo '<p>La palabra fue borrada del diccionario</p>';  
            } else {
                echo '<p>La palabra no existe en el diccionario</p>';
            }
        } else {
            echo '<p>Debes introducir la palabra en español que deseas borrar</p>';
        }
    }
    
    //función para buscar la traduccion en ingles de la palabra pasada en español
    function buscar_espaniol($espaniol, $diccionario) {
        if (!empty($espaniol)) {
            if (array_key_exists($espaniol, $diccionario)) {
                $ingles = ($diccionario[$espaniol]);
                echo '<p>La palabra <b>' .$espaniol. '</b> se traduce en inglés como <b>' .$ingles. '</b></p>';  
            } else {
                echo '<p>La palabra no existe en el diccionario</p>';
            }
        } else {
            echo '<p>Debes introducir la palabra en español que deseas buscar en inglés</p>';
        }
    }
    
    //función para buscar la traduccion en español de la palabra pasada en ingles
    function buscar_ingles($ingles, $diccionario) {
        if (!empty($ingles)) {
            if (array_search($ingles, $diccionario)) {
                $espaniol = array_search($ingles, $diccionario);
                echo '<p>La palabra <b>' .$ingles. '</b> se traduce en español como <b>' .$espaniol. '</b></p>';  
            } else {
                echo '<p>La palabra no existe en el diccionario</p>';
            }
        } else {
            echo '<p>Debes introducir la palabra en inglés que deseas buscar en español</p>';
        }
    }
    
    
    //función para listar palabras acabadas en 'ar'
    function listar_palabra_ar($diccionario) {
        print '<p>Lista de palabras acabadas en <b>"ar"</b></p>';
        print '<ul>';
        $cont = 0;
        foreach ($diccionario as $esp => $ing) {
            if (substr($esp, -2) === 'ar') {
                print '<li>' .$esp. ' => ' .$ing. '</li>';
                $cont++;
            }
        }
        if ($cont === 0) {
            echo '<p>No existen palabras</p>';
        }
        print '</ul>';
	}
    
    //función para mostrar las palabras del diccionario
    function mostrar_diccionario($diccionario) {
        foreach ($diccionario as $palabra_esp => $palabra_ing) {
            print '<tr>';
            print '<td>' . $palabra_esp . '</td>';
            print '<td>' . $palabra_ing . '</td>';
            print '</tr>';
        }
    }

?>


