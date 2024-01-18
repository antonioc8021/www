<?php
class Electronica extends Producto {
    private $plazoGarantia;
    
    public function __construct($codigo, $precio, $nombre, $plazoGarantia) {
        parent::__construct($codigo, $precio, $nombre);
        $this->plazoGarantia = $plazoGarantia;
    }

    public function getPlazoGarantia() {
        return $this->plazoGarantia;
    }

    public function mostrarDatos() {
        parent::mostrarDatos();
        echo "<p>Plazo de garantía: {$this->plazoGarantia} meses</p></div><br>";
    }
}