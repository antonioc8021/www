<?php


abstract class ElementoVolador
{
    private $nombre;
    private $numeroAlas;
    private $numeroMotores;
    private $altitud;
    private $velocidad;

    public function __construct($nombre, $numeroAlas, $numeroMotores)
    {
        $this->nombre = $nombre;
        $this->numeroAlas = $numeroAlas;
        $this->numeroMotores = $numeroMotores;
        $this->altitud = 0;
        $this->altitud = 0;
    }


    // Getter mágico para acceder a propiedades privadas
    public function __get($atributo)
    {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        } else {
            throw new Exception("Propiedad no válida: $atributo");
        }
    }


    // Setter mágico para asignar valores a propiedades privadas
    public function __set($atributo, $valor)
    {
        if (property_exists($this, $atributo)) {
            $this->$atributo = $valor;
        } else {
            throw new Exception("Propiedad no válida: $atributo");
        }
    }


}





