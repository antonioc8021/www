<?php 

    class Coche
    {
        private $matricula;
        private $velocidad;

        public function __construct($matricula, $velocidad)
        {
            $this->matricula = $matricula;
            $this->velocidad = $velocidad;
        }

        public function acelera($aumento)
        {
            $this->velocidad += $aumento;
            if($this->velocidad > 120)
                $this->velocidad = 120;
        }


        public function frena($decremento)
        {
            $this->velocidad -= $decremento;
            if($this->velocidad<0)
                $this->velocidad = 0;
        }


        public function mostrar()
        {
            echo "$this->matricula va a $this->velocidad km/h <br />";
        }


        public function __set($var, $valor) 
        {  
            if (property_exists(__CLASS__, $var)) 
            {  
                $this->$var = $valor;  
            } 
            else 
            {  
                echo "No existe el atributo $var.";  
            }  
        } 

        public function __get($var) 
        {  
            if (property_exists(__CLASS__, $var)) 
            {  
                return $this->$var;  
            }  
            return NULL;  
        } 

    }

 ?>