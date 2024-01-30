<?php
    abstract class Cuenta 
    {
        protected $numero;
        protected $titular;
        protected $saldo;
        
        
        public function __construct($numero, $titular, $saldo) {
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
        
        
        public function mostrar() {
            return "<strong>" .$this->numero . "</strong>: ". $this->titular . ": ". $this->saldo  ."€";
        }

        
        
        function getNumero() {
            return $this->numero;
        }

        function getTitular() {
            return $this->titular;
        }

        function getSaldo() {
            return $this->saldo;
        }   
    }
?>