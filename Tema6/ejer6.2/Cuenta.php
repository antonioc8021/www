<?php

abstract class Cuenta
{
    protected $numero;
    protected $titular;
    protected $saldo;

    public function __construct($numero, $titular, $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function ingreso($cantidad)
    {
        $this->saldo += $cantidad;
    }

    public function reintegro($cantidad)
    {
        $this->saldo -= $cantidad;
    }

    public function esPreferencial($cantidad)
    {
        return $this->saldo > $cantidad;
    }

    abstract public function mostrar();
}
