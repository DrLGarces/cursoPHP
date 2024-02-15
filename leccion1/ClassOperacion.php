<?php

    class Operacion {
        public $cantidadUno=0;
        public $cantidaddos=0;
        public $resultado=0;

        public function __construct($cantidaduno, $cantidaddos){
            $this->cantidadUno=$cantidaduno;
            $this->cantidaddos=$cantidaddos;
            
        }

        public function getSuma(){
            $this->resultado=$this->cantidadUno+$this->cantidaddos;
            return $this->resultado;
        }

        
        public function getResta(){
            $this->resultado=$this->cantidadUno-$this->cantidaddos;
            return $this->resultado;
        }

        
        public function getMultiplicacion(){
            $this->resultado=$this->cantidadUno*$this->cantidaddos;
            return $this->resultado;
        }

        
        public function getDivision(){
            $this->resultado=$this->cantidadUno/$this->cantidaddos;
            return $this->resultado;
        }

    }//end class Operacion
?>