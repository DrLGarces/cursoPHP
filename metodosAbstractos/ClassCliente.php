<?php 
require_once("ClassPersona.php");

class Cliente extends Persona{
    protected $fltCredito;


    function __construct(int $intCI, string $strNombre, int $intEdad)
    {
        parent::__construct($intCI, $strNombre, $intEdad);
        

    }

    public function setCredito(string $fltCredito){
        $this->fltCredito=$fltCredito;
    }

    public function getCredito(){
        return $this->fltCredito;
    }

}
