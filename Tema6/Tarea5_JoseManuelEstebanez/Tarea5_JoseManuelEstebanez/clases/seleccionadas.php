<?php
class Seleccion
{
    private $pizzasSeleccionadas;

    public function __construct()
    {
        $this->pizzasSeleccionadas = [];
    }

    public function agregarPizza($pizza)
    {
        $this->pizzasSeleccionadas[] = $pizza;
    }

    public function eliminarPizza($codigoPizza)
    {
        foreach ($this->pizzasSeleccionadas as $key => $pizza) {
            if ($pizza->getCodigo() == $codigoPizza) {
                unset($this->pizzasSeleccionadas[$key]);
                break;
            }
        }
    }

    public function limpiarSeleccion()
    {
        $this->pizzasSeleccionadas = [];
    }

    public function getPizzas()
    {
        return $this->pizzasSeleccionadas;
    }

    public function contienePizza($pizza)
    {
        foreach ($this->pizzasSeleccionadas as $pizzaSeleccionada) {
            if ($pizzaSeleccionada->getCodigo() == $pizza->getCodigo()) {
                return true;
            }
        }
        return false;
    }
    public function count() {
        return count($this->pizzasSeleccionadas);
    }
}
?>