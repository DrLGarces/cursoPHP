<?php 
    class Persona{
        public $intCI;
        public $strNombre;
        public $intEdad;

        public function __construct(int $intCI, string $strNombre, int $intEdad){
            $this->intCI=$intCI;
            $this->strNombre=$strNombre;
            $this->intEdad=$intEdad;
        }


        public function getDatosPersonales(){
            return $datos="Datos de usuario: <br>
            Nombre: {$this->strNombre}<br>
            CI: {$this->intCI}<br>
            Edad: {$this->intEdad}<br>";
        }
    }

