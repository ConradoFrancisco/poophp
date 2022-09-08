<?php 
    class Persona {
        //propiedades
        public $nombre;
        public $edad;
        public $colorOjos;
        public static $piernas = 4;
        //Constructor
        public function __construct($nombre,$edad,$colorOjos){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->colorOjos = $colorOjos;
        }

        //Métodos
        public function agregarNombre($name){
            $this->nombre = $name;
        }

        public static function upPiernas($nuevaCant){
            self::$piernas = $nuevaCant;
        }
    };
?>