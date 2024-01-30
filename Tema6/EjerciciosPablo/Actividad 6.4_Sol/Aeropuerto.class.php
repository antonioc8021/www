<?php
    class Aeropuerto{
    
        private $flota; //array de ElementosVoladores
    
		//Constructor
        public function __construct()
        {
            $this->flota = array();              
        }

		//Método insertar
        public function insertar(ElementoVolador $elementoVolador) {
            $this->flota[]=$elementoVolador;
        }
		
		//Método buscar
        public function buscar($nombre) {
            $encontrado = false;
            foreach ($this->flota as $objeto){
                if ( $objeto->getNombre()==$nombre){
                    print $objeto->mostrarInformacion();
                    $encontrado=true;
                }
            }       
            if (!$encontrado) {
               printf("%s no encontrado en la flota<br/>", $nombre);
            }
        }
    
		//Método listarCompania
        public function listarCompania($compania) {
            $encontrado = false;
            foreach ($this->flota as $objeto){
                if ($objeto instanceof Avion) {
                    if ($objeto->getCompania()==$compania ){
                        print $objeto->mostrarInformacion();
                        $encontrado = true;
                    }
                }
            }
            if (!$encontrado) {
                printf("Aviones de la compañía %s no encontrados en la flota<br/>", $compania);
            }
        }
    
		//Método rotores:
		public function rotores($rotor) {
			foreach ($this->flota as $objeto){ 
				if ($objeto instanceof Helicoptero) {
					if ($objeto->getNRotor() == $rotor) {
						print $objeto->mostrarInformacion();
					}
				}
			}
		}
    
		//Método despegar: 
		public function despegar($nombre, $altitud, $velocidad) {
			foreach ($this->flota as $objeto){ 
				if ($objeto->getNombre()==$nombre) {
					$objeto->acelerar($velocidad);
					$objeto->volar($altitud);
					return $objeto;
				}
			}
			return null;
		}
	}
?>