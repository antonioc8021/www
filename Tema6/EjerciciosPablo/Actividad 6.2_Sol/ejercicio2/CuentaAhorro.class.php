<?php

    class CuentaAhorro extends Cuenta
    {
        private $comision_apertura;
        private $intereses;
        
        public function __construct($numero, $titular, $saldo, $comision_apertura, $intereses) {
            parent::__construct($numero, $titular, $saldo);
            $this->comision_apertura = $comision_apertura;
            $this->intereses = $intereses;
            $this->saldo-= $this->comision_apertura;
        }
        

        public function aplicaInteres()
        {
            $this->saldo += ($this->saldo*$this->intereses/100);
        }
        
        
        public function mostrar() {
            return parent::mostrar() . " Comisión apertura: " . $this->comision_apertura . "€ con intereses al $this->intereses %";
        }
    }
?>