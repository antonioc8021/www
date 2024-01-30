<?php
    class Helicoptero extends ElementoVolador{

        private $propietario; //propietario
        private $nRotor; //número de rotores
		
		//Constructor público
        public function __construct($nombre,$numAlas,$numMotores,$propietario,$nRotor)
        {
            parent::__construct($nombre, $numAlas, $numMotores);
            $this->propietario = $propietario;
            $this->nRotor = $nRotor;
        }
    
		//set y get publicos
        public function getNRotor()
		{
            return $this->nRotor;
        }
		
		//Método volar: 
        public function volar($altitud) {
            if ($altitud <= (100*$this->nRotor)) {
                for ($altitudActual = $this->getAltitud(); $altitudActual <= $altitud; $altitudActual += 20) {
                    $this->setAltitud($altitudActual);
                    printf("Altitud: %d metros\n", $this->getAltitud());
                }
            } else {
                printf("Altitud incorrecta: %d metros (%d rotores)\n", $altitud, $this->nRotor);
            }
        }

		//Método mostrarInformación:
		public function mostrarInformacion() {
			echo "Nombre: " . $this->getNombre()  . "<br />"
				."Numero de alas: " . $this->getNumAlas() . "<br />"
				. "Numero de motores: " .$this->getNumMotores() . "<br />"
				. "Propietario: " . $this->propietario . "<br />"
				. "Numero de rotores: " . $this->nRotor. "<br />"
				. "Velocidad: " . $this->getVelocidad() . "<br />"
				. "Altitud: " . $this->getAltitud(). "<br />";
		}
    }  
?>