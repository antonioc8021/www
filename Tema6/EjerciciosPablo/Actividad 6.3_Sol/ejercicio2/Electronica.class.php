<?php 

    class Electronica extends Producto
    {
        private $plazoGarantia;

        public function __construct($codigo, $precio, $nombre, $plazoGarantia)
        {
            parent::__construct($codigo, $precio, $nombre);
            $this->plazoGarantia = $plazoGarantia;
        }

        public function __toString()
        {
            return parent::__toString() . " y tiene garantía de $this->plazoGarantia años";
        }

        public function getPlazoGarantia()
        {
            return $this->plazoGarantia;
        }

        public function setPlazoGarantia($plazoGarantia)
        {
            $this->plazoGarantia = $plazoGarantia;
        }
    }
?>