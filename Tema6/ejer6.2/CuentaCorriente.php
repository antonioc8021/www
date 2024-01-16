<?php
class CuentaCorriente extends Cuenta {
    private $cuotaMantenimiento;

    public function __construct($numero, $titular, $saldo, $cuotaMantenimiento) {
        parent::__construct($numero, $titular, $saldo - $cuotaMantenimiento);
        $this->cuotaMantenimiento = $cuotaMantenimiento;
    }

    public function reintegro($cantidad) {
        if ($this->saldo >= 20) {
            parent::reintegro($cantidad);
        }
    }

    public function mostrar() {
        echo "CUENTA CORRIENTE: Nº de Cuenta: {$this->numero}, TITULAR: {$this->titular}, SALDO: {$this->saldo}, CUOTA DE MANTENIMIENTO: {$this->cuotaMantenimiento}";
    }
}
?>