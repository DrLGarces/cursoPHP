<?php 
    abstract class Persona{
        public $intCI;
        public $strNombre;
        public $intEdad;
        public $strMensaje;

        public function __construct(int $intCI, string $strNombre, int $intEdad){
            $this->intCI=$intCI;
            $this->strNombre=$strNombre;
            $this->intEdad=$intEdad;
        }


        abstract public function getDatosPersonales();
        abstract public function getMensaje():string;
        abstract public function setMensaje(string $Mensaje);
    }

