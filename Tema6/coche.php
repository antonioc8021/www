<?php

class Coche
{
    private $velocidad;
    private $matricula;

    //CONSTRUCTOR
    public function __construct($velocidad, $matricula)
    {
        $this->velocidad = $velocidad;
        $this->matricula = $matricula;
    }


    //METODOS MÁGICOS
    public function __get($var)
    {
        if (property_exists(__CLASS__, $var)) {
            return $this->$var;
        }
        return NULL;

    }

    public function __set($var, $valor)
    {
        if (property_exists(__CLASS__, $var)) {
            $this->$var = $valor;
        } else {
            echo "No existe el atributo $var";
        }
    }


    //METODOS FRENAR Y ACLERAR
    public function acelerar($aumento)
    {
        $this->velocidad += $aumento;
        if ($this->velocidad > 120) {
            $this->velocidad = 120;
        }
    }

    public function frenar($decremento)
    {
        $this->velocidad -= $decremento;
        if ($this->velocidad < 0) {
            $this->velocidad = 0;
        }
    }


    public function mostrar()
    {
        echo "El coche con matricula $this->matricula va a $this->velocidad km/h <br/>";
    }

}

?>