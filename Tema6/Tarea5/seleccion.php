<?php
class Seleccion {
    private $pizzas;

    public function __construct() {
        $this->pizzas = array();
    }

    public function addPizza(Pizza $pizza) {
        if (!in_array($pizza, $this->pizzas)) {
            $this->pizzas[] = $pizza;
        } else {
            echo "La pizza ya está seleccionada.<br>";
        }
    }

    public function removePizza($key) {
        if (array_key_exists($key, $this->pizzas)) {
            unset($this->pizzas[$key]);
        }
    }

    public function vaciarSeleccion() {
        $this->pizzas = array();
    }

    public function getPizzas() {
        return $this->pizzas;
    }

    public function getImporte() {
        $importe = 0;
        foreach ($this->pizzas as $pizza) {
            $importe += $pizza->getPrecio();
        }
        return $importe;
    }
}
?>