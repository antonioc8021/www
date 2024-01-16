<?php

class Productos
{

    protected $codigo;
    protected $precio;
    protected $nombre;

    public function __construct($codigo, $precio, $nombre)
    {
        $this->codigo = $codigo;
        $this->precio = $precio;
        $this->nombre = $nombre;
    }

    public function __get($var)
    {
        if (property_exists(__CLASS__, $var)) {
            return $this->$var;
        }
        return NULL;

    }

    public function __set($var, $valor)
    {
        if (property_exists(__CLASS__, $var)) {
            $this->$var = $valor;
        } else {
            echo "No existe el atributo $var";
        }
    }

}