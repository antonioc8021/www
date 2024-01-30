<?php 

    require_once 'Medico.class.php';

    class MedicoUrgencias extends Medico
    {
        private $unidad;

        public function __construct($nombre, $edad, $turno, $unidad)
        {
            parent::__construct($nombre, $edad, $turno);
            $this->unidad = $unidad;
        }

        public function __toString()
        {
            return parent::__toString() . " y trabaja en $this->unidad";
        }
    }

?>