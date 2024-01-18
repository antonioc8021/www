<?php

class Producto {
    protected $codigo;
    protected $precio;
    protected $nombre;

    public function __construct($codigo, $precio, $nombre) {
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function mostrarDatos() {
        echo "<div class='producto'><p>Código: {$this->codigo}, Precio: {$this->precio}, Nombre: {$this->nombre}</p>";
    }
}




