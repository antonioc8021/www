<?php
    class Avion extends ElementoVolador{

        private $compania; //Compañía a la que pertenece
        private $fechaAlta; //Fecha de alta en la compañia
        private $altitudMaxima; //Altitud máxima que alcanza

		//Constructor 
        public function __construct($nombre,$numAlas,$numMotores,$compania,$fechaAlta,$altitudMaxima)
        {
            parent::__construct($nombre, $numAlas, $numMotores);
            $this->compania = $compania;
            $this->fechaAlta = $fechaAlta;
            $this->altitudMaxima = $altitudMaxima;
        }
		//Los getter y los setter públicos    
        public function getCompania()
        {
            return $this->compania;
        }
        public function getFechaAlta()
        {
            return $this->fechaAlta;
        }
        public function getAltitudMaxima()
        {
            return $this->altitudMaxima;
        }
        public function setCompania($compania)
        {
            $this->compania = $compania;
        }
        public function setAltitudMaxima($altitudMaxima)
        {
            $this->altitudMaxima = $altitudMaxima;
        }

		//Método volar:
        public function volar($altitud) {
            if ($altitud >= 0 && $altitud <= $this->getAltitudMaxima()) {
                if ($this->getVelocidad() >= 150) {
                    for ($altitudActual = $this->getAltitud(); $altitudActual <= $altitud; $altitudActual += 100) {
                        $this->setAltitud($altitudActual);
                        printf("Altitud: %d metros\n", $this->getAltitud());
                    }
                } else {
                    printf("Velocidad insuficiente: %d nudos\n",$this->getVelocidad());
                }
            } else {
                printf("Altitud incorrecta: %d metros\n", $altitud);
            }
        }

		//Método mostrarInformación:
        public function mostrarInformacion() {
            echo "Nombre: " . $this->getNombre()  . "<br />"
                ."Numero de alas: " . $this->getNumAlas() . "<br />"
                . "Numero de motores: " .$this->getNumMotores() . "<br />"
                . "Compañia aerea: " . $this->compania . "<br />"
                . "Fecha de alta: " . $this->fechaAlta . "<br />"
                . "Altitud maxima: " . $this->altitudMaxima . "<br />"
                . "Velocidad: " . $this->getVelocidad() . "<br />"
                . "Altitud: " . $this->getAltitud(). "<br />";
        }
    }  
?>