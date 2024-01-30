<?php
    require_once 'Medico.class.php';

    class MedicoFamilia extends Medico
    {
        private $numPacientes;

        public function __construct($nombre, $edad, $turno, $numPacientes)
        {
            parent::__construct($nombre, $edad, $turno);
            $this->numPacientes = $numPacientes;
        }

        public function __toString()
        {
            return parent::__toString() . " y tiene $this->numPacientes pacientes";
        }

        public function __get($var) 
        {  
            if (property_exists(self::class, $var) || property_exists(parent::class, $var)) 
            {  
                return $this->$var;  
            }  
            return NULL;  
        }  
/*
        public function getNumPacientes()
        {
            return $this->numPacientes;
        }
*/
    }
?>