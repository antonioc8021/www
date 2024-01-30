<?php 
    class Alimentacion extends Producto
    {
        private $mes;
        private $anio;

        public function __construct($codigo, $precio, $nombre, $mes, $anio)
        {
            parent::__construct($codigo, $precio, $nombre);
            $this->mes = $mes;
            $this->anio = $anio;
        }

        public function __toString()
        {
            return parent::__toString() . " y caduca el $this->mes/$this->anio";
        }

        public function getMes()
        {
            return $this->mes;
        }

        public function setMes($mes)
        {
            $this->mes = $mes;
        }

        public function getAnio()
        {
            return $this->anio;
        }

        public function setAnio($anio)
        {
            $this->anio = $anio;
        }
    }
?>