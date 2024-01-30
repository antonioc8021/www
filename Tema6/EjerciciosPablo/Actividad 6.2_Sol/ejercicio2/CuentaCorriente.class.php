<?php

    class CuentaCorriente extends Cuenta
    {
        private $cuota_mantenimiento;
        
        public function __construct($numero, $titular, $saldo, $cuota_mantenimiento) {
            parent::__construct($numero, $titular, $saldo);
            $this->cuota_mantenimiento = $cuota_mantenimiento;
            $this->saldo-= $this->cuota_mantenimiento;
        }
        
        function getCuota_mantenimiento() {
            return $this->cuota_mantenimiento;
        }

        function setCuota_mantenimiento($cuota_mantenimiento) {
            $this->cuota_mantenimiento = $cuota_mantenimiento;
        }

        public function reintegro($cantidad) {
            if($this->saldo-$cantidad > 20)
                parent::reintegro($cantidad);
            else
                echo "<strong>NO SE PUEDE SACAR DINERO. SU SALDO ES MENOR DE 20€</strong><br />";
                
        }
        
        
        public function mostrar() {
            return parent::mostrar() . " Cuota Mantenimiento: " . $this->cuota_mantenimiento;
        }
    }
?>
