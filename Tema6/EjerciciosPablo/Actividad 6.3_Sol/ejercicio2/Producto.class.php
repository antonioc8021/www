<?php 

    abstract class Producto
    {
        private $codigo;
        private $precio;
        private $nombre;

        public function __construct($codigo, $precio, $nombre)
        {
            $this->codigo = $codigo;
            $this->precio = $precio;
            $this->nombre = $nombre;
        }

        public function __toString()
        {
            return "$this->nombre ($this->codigo): {$this->precio}€";
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function getPrecio()
        {
            return $this->precio;
        }

        public function setPrecio($precio)
        {
            $this->precio = $precio;
        }

        public function getNombre()
        {
            return $this->nombre;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
    }
 ?>