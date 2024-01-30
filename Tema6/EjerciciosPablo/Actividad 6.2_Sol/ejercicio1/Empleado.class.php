<?php

    class Empleado 
    {
        protected $nombre;
        protected $sueldo;
        
        public function __construct($nombre, $sueldo) {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }
        
        function getNombre() {
            return $this->nombre;
        }

        function getSueldo() {
            return $this->sueldo;
        }

        function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        function setSueldo($sueldo) {
            $this->sueldo = $sueldo;
        }
    }   
?>