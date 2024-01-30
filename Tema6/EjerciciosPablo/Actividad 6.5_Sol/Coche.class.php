<?php 
    require_once 'Encendible.interface.php';

    class Coche implements Encendible
    {
        private $gasolina;
        private $bateria;
        private $estado;

        public function __construct()
        {
            $this->gasolina = 0;
            $this->bateria = 10;
            $this->estado = false;
        }

        public function encender()
        {
            if($this->gasolina>0 && $this->bateria>0 && $this->estado==false)
            {
                //Lo encendemos
                $this->gasolina--;
                $this->bateria--;
                $this->estado = true;
                echo "Se ha encendido el coche<br/>";
            }
        }

        public function apagar()
        {
            if($this->estado==true){
                $this->estado = false;
				echo "Se ha apagado el coche<br/>";
			}
            else
				echo "Error: No se puede apagar un coche apagado<br/>";
        }

        public function repostar($litros)
        {
            $this->gasolina+=$litros;
        }
    }
 ?>