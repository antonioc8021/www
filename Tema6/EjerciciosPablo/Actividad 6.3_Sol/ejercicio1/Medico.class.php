<?php 

    abstract class Medico
    {
        protected $nombre;
        protected $edad;
        protected $turno;

        public function __construct($nombre, $edad, $turno)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->turno = $turno;
        }

        public function __toString()
        {
            return "$this->nombre tiene $this->edad años con un turno de $this->turno";
        }

/*        public function __set($var, $valor) 
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
*/
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