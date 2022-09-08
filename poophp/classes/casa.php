<?php 
    class Casa {
        public $adress;
        public $habitaciones;
        public $vecindario;
        public $partido;
        public $antiguedad;

        public static $precio = 250000;
        public function __construct($adress,$habitaciones,$vecindario,$partido,$antiguedad){
            $this->adress = $adress;
            $this->habitaciones = $habitaciones;
            $this->vecindario = $vecindario;
            $this->partido = $partido;
            $this->antiguedad = $antiguedad;
        }
    }
?>