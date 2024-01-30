<?php

class Pizza{
    private $codigo;
    private $descripcion;
    private $precio;
    private $tipo;
    private $foto;
    
    function __construct($row) {
        $this->codigo = $row['codigo'];
        $this->descripcion = $row['descripcion'];
        $this->precio = $row['precio'];
        $this->tipo = $row['tipo'];
        $this->foto = $row['foto'];
    }
    
    function getCodigo() {
        return $this->codigo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getFoto() {
        return $this->foto;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }
    
}