<?php 

    class Monedero
    {
        private $dinero;
        private static $numero_monederos;

        public function __construct($dinero)
        {
            $this->dinero = $dinero;
            self::$numero_monederos++;
        }

        public function __destruct()
        {
            self::$numero_monederos--;
        }

        public function meterDinero($dinero)
        {
            if($dinero>0)
                $this->dinero += $dinero;
        }

        public function sacarDinero($dinero)
        {
            if($dinero>0 && $this->dinero-$dinero>=0)
                $this->dinero -= $dinero;
        }

        public function mostrar()
        {
            echo "El monenedero tiene $this->dinero<br/>";
        }

        public static function getNumeroMonederos()
        {
            return self::$numero_monederos;
        }
    }

 ?>