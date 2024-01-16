<?php
class CuentaAhorro extends Cuenta
{
    private $comisionApertura;
    private $intereses;

    public function __construct($numero, $titular, $saldo, $comisionApertura, $intereses)
    {
        parent::__construct($numero, $titular, $saldo - $comisionApertura);
        $this->comisionApertura = $comisionApertura;
        $this->intereses = $intereses;
    }

    public function aplicaInteres()
    {
        $this->saldo += $this->saldo * $this->intereses;
    }  

    public function mostrar()
    {
        echo "CUENTA AHORRO: Nº de Cuenta: {$this->numero}, TITULAR: {$this->titular}, SALDO: {$this->saldo}, COMISIÓN DE APERTURA: {$this->comisionApertura}, INTERESES: {$this->intereses}";
    }
}
