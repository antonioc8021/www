<?php
class Pizza
{
    // atributos de la clase
    protected $codigo;
    protected $descripcion;
    protected $precio;
    protected $tipo;
    protected $foto;

    // creo constructor
    function __construct($codigo, $descripcion, $precio, $tipo, $foto)
    {
        $this->codigo = $codigo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->tipo = $tipo;
        $this->foto = $foto;
    }

    function getCodigo()
    {
        return $this->codigo;
    }

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    function getDescripcion()
    {
        return $this->descripcion;
    }

    function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    function getPrecio()
    {
        return $this->precio;
    }

    function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    function getFoto()
    {
        return $this->foto;
    }

    function setFoto($foto)
    {
        $this->foto = $foto;
    }
}