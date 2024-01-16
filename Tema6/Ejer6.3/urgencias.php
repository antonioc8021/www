<?php

class Urgencias extends Medico
{
    private $unidad;


    public function __construct($nombre, $edad, $turno, $unidad)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $unidad;
    }



    /**
     * Get the value of unidad
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set the value of unidad
     *
     * @return  self
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }
}

