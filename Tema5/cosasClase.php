<?php
session_name('Tobias.Jonshon');
session_start();
echo 'Nombre de sesión:', session_name(), "<br>";
echo 'ID sesión:', session_id(), "<br>";

if (!isset($_session['contador'])) {

}



?>