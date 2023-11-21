<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargando...</title>
    <style>
        .texto {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5em;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <div class="texto">
        <div>Cancelando...</div>
    </div>

    <?php
    // de locos titán
    header("Refresh: 5; URL=familia.php");
    ?>

</body>

</html>