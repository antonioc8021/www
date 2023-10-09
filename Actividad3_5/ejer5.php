<?php
if (isset($_POST['enviar'])) {
    if (isset($_POST['numero'])) {
        if (($_POST['numero'] % 2) == 0) {
            echo "<h1>EL NUMERO " . $_POST['numero'] . ", ES PAR</h1>";
        } else {
            echo "<h1>EL NUMERO " . $_POST['numero'] . ", ES IMPAR</h1>";
        }
    }
}

?>