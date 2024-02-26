<?php 
    include_once("../Controlador/funcionesControlador.php");
    include_once("../Controlador/Pizza.php");
    function mostrarNumeroPedido() {
        return numeroPedido()[0] + 1;
    }
    function mostrarPizzas() {
        $pizzas = obtenerPizzas();
        $_SESSION["pizzas"] = $pizzas;
        foreach($pizzas as $pizza) {
            $codigo = $pizza->getCodigo();
            $foto = $pizza->getFoto();
            $titulo = $pizza->getDescripcion();
            $precio = $pizza->getPrecio();
            $tipo = $pizza->getTipo();
            echo("<div class='col-md-3'>
                        <div class='card'>
                            <img src='./foto_pizzas/$foto.png' class='card-img-top'>
                            <h4 class='card-title'>$codigo</h4>
                            <h4 class='card-title'>$titulo($tipo)</h4>
                            <div class='card-body'>
                                <h5 class='card-text'>$precio €</h5>
                            </div>
                        </div><br>
                    </div>");
        }
    }    
?>