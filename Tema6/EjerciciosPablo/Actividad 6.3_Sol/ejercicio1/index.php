<?php 

    require_once 'MedicoFamilia.class.php';
    require_once 'MedicoUrgencias.class.php';

    $medicos = array();

    $medicos[] = new MedicoFamilia("familia1", 30, "Mañana", 100);
    $medicos[] = new MedicoFamilia("familia2", 45, "Tarde", 88);
    $medicos[] = new MedicoFamilia("familia3", 39, "Mañana", 110);


    $medicos[] = new MedicoUrgencias("urgencias1", 35, "Mañana", "Trauma");
    $medicos[] = new MedicoUrgencias("urgencias2", 65, "Tarde", "Neuro");
    $medicos[] = new MedicoUrgencias("urgencias3", 61, "Mañana", "Cardio");

    function getTodos($medicos)
    {
        echo "<h2>Todos los médicos</h2><ul>";
        foreach ($medicos as $medico) {
            echo "<li>$medico</li>";
        }
        echo "</ul>";
    }

    function getTardeUrgenciasMayores($medicos)
    {
        echo "<h2>Médicos mayores</h2><ul>";
        foreach ($medicos as $medico) 
        {
            if($medico instanceof MedicoUrgencias && $medico->turno == "Tarde" && $medico->edad > 60)
                echo "<li>$medico</li>";
        }
        echo "</ul>";
    }

    function getMedicosFamilia($medicos, $numPacientes)
    {
        echo "<h2>Médicos familia</h2><ul>";
        foreach ($medicos as $medico) 
        {
            if($medico instanceof MedicoFamilia && $medico->numPacientes >= $numPacientes)
                echo "<li>$medico</li>";
        }
        echo "</ul>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php 
            getTodos($medicos);
            getTardeUrgenciasMayores($medicos);
            getMedicosFamilia($medicos,100);
        ?>
    </body>
</html>
