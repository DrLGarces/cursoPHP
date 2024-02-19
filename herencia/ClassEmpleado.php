<?php 
require_once("ClassPersona.php");

class Empleado extends Persona{
    protected $strPuesto;



    function __construct(int $intCI, string $strNombre, int $intEdad)
    {
        parent::__construct($intCI, $strNombre, $intEdad);
        

    }

    public function setPuesto(string $strPuesto){
        $this->strPuesto=$strPuesto;
    }

    public function getPuesto(){
        return $this->strPuesto;
    }

}


