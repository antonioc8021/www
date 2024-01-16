<?php

abstract class Medico
{
    protected $nombre;
    protected $edad;
    protected $turno;


    public function __construct($nombre, $edad, $turno)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->turno = $turno;
    }


    public



        /**
         * Get the value of nombre
         */
        public function getNombre(
    ) {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of turno
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Set the value of turno
     *
     * @return  self
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }
}
