<?php 
class Alimentacion extends Producto {
    private $mesCaducidad;
    private $anioCaducidad;

    public function __construct($codigo, $precio, $nombre, $mesCaducidad, $anioCaducidad) {
        parent::__construct($codigo, $precio, $nombre);
        $this->mesCaducidad = $mesCaducidad;
        $this->anioCaducidad = $anioCaducidad;
    }

    public function getMesCaducidad() {
        return $this->mesCaducidad;
    }

    public function getAnioCaducidad() {
        return $this->anioCaducidad;
    }

    public function mostrarDatos() {
        parent::mostrarDatos();
        echo "<p>Mes de caducidad: {$this->mesCaducidad}, Año de caducidad: {$this->anioCaducidad}</p></div><br>";
    }
}