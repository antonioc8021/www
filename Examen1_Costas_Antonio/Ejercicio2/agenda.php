<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once("funciones.php");
    $telefonos = array(
        'Marta' => '675223344',
        'Alberto' => '654321123',
        'Luis' => '642335334',
        'Kiko' => '632123261',
        'Sandra' => '665667788',
        'Rocío' => '689326598'
    );

    print_r($telefonos);
    echo '<br>';
    echo '<br>';
    buscar('Luis', $telefonos);
    echo '<br>';
    buscar('Emilio', $telefonos);
    echo '<br>';
    anadir('Antonio', '611111111', $telefonos);
    echo '<br>';
    anadir('Sandra', '622222222', $telefonos);
    echo '<br>';
    eliminar('Luis', $telefonos);
    echo '<br>';
    print_r($telefonos);
    ?>
</body>

</html>