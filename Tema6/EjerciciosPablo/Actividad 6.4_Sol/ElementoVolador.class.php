<?php 
    abstract class ElementoVolador implements Volador{
		private $nombre;
        private $numAlas;
        private $numMotores;
        private $altitud;
        private $velocidad;

        public function __construct($nombre, $numAlas, $numMotores)
        {
            $this->nombre = $nombre;
            $this->numAlas = $numAlas;
            $this->numMotores = $numMotores;
            $this->altitud = 0;
            $this->velocidad = 0;
        }

        public function getNombre()
        {
            return $this->nombre;
        }
        public function getNumAlas()
        {
            return $this->numAlas;
        }
        public function getNumMotores()
        {
            return $this->numMotores;
        }
        public function getAltitud()
		{
            return $this->altitud;
        }
        public function getVelocidad(){
            return $this->velocidad;
        }
        public function setAltitud($altitud)
        {
            $this->altitud = $altitud;
        }

        public function volando() {
            if ($this->altitud > 0)
                return true;
            else  
				return false;        
        }

        public function acelerar($velocidad) {
            $this->velocidad += $velocidad;
        }

        abstract public function volar($altitud);
        abstract public function mostrarInformacion();    
}
?>
