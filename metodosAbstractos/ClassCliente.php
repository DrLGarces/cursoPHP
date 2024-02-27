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


    public function setMensaje(string $Mensaje)
    {
        $this->strMensaje=$Mensaje;
    }

    public function getMensaje():string{
        return "{$this->strMensaje} "."{$this->strNombre}";
    }

    public function getDatosPersonales()
    {
        $datos="
        <h2>Datos Personales</h2>
        CI:{$this->intCI}<br>
        Nombre:{$this->strNombre}<br>
        Edad:{$this->intEdad}<br>
        ";
        return $datos;
    }

}
