<?php

require_once './medico.php';

class Familia extends Medico
{
    private $num_pacientes;

    public function __construct($nombre, $edad, $turno, $num_pacientes)
    {
        parent::__construct($nombre, $edad, $turno);
        $this->num_pacientes = $num_pacientes;
    }

    /**
     * Get the value of num_pacientes
     */
    public function getNum_pacientes()
    {
        return $this->num_pacientes;
    }

    /**
     * Set the value of num_pacientes
     *
     * @return  self
     */
    public function setNum_pacientes($num_pacientes)
    {
        $this->num_pacientes = $num_pacientes;

        return $this;
    }
}
