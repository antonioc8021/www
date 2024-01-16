<?php
require_once './familia.php';
require_once './urgencias.php';


$medicos = array();

$medicos[] = new Familia('Antonio', 21, 'mañana', 14);
$medicos[] = new Familia('Diego', 49, 'mañana', 140);
$medicos[] = new Familia('Luis', 38, 'tarde', 110);
$medicos[] = new Urgencias('Mario', 39, 'Tarde', 'Trauma');
$medicos[] = new Urgencias('Fran', 62, 'Tarde', 'Psiquiatría');
$medicos[] = new Urgencias('Miguel', 55, 'mañana', 'Neuro');

function getTodos($medicos)
{

}