<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $modulo = $_POST["modulo"];
    echo "Nombre del alumno (POST): $nombre<br>";
    echo "Módulo (POST): $modulo<br>";
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $nombre = $_GET["nombre"];
    $modulo = $_GET["modulo"];
    echo "Nombre del alumno (GET): $nombre<br>";
    echo "Módulo (GET): $modulo<br>";
}
?>