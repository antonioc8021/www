<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_SERVER['PHP_SELF'] . '<br/>';
    echo $_SERVER['SERVER_ADDR'] . '<br/>';
    echo $_SERVER['SERVER_NAME'] . '<br/>';
    echo $_SERVER['DOCUMENT_ROOT'] . '<br/>';
    echo $_SERVER['REMOTE_ADDR'] . '<br/>';
    ?>
</body>

</html>