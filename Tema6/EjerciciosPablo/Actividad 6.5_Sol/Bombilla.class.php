<?php 
    require_once 'Encendible.interface.php';

    class Bombilla implements Encendible
    {
        private $horasDeVida;

        public function __construct($horasDeVida)
        {
            $this->horasDeVida = $horasDeVida;
        }

        public function encender()
        {
            if($this->horasDeVida>1)
            {
                $this->horasDeVida -= 2;
                echo "Se ha encendido la bombilla<br/>";
            }
        }

        public function apagar()
        {
            echo "Se ha apagado la bombilla<br/>";               
        }
    }
 ?>