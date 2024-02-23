<?php 
require_once('ClassMueble.php');
Class Mesa extends Mueble{

    private $strForma="";
    protected $strTamanio;


    public function __construct(string $strColor,string $strMaterial,string $strStatus,string $strDescripcion,float $fltPrecio,string $strTamanio){
        parent::__construct($strColor,$strMaterial,$strStatus,$strDescripcion,$fltPrecio);
        $this->strTamanio=$strTamanio;
    }

    public function getInfoProducto(){
        $arrProducto=array('Descripción'=>$this->strDescripcion,
        'Precio'=>$this->fltPrecio,
        'Stock Minimo'=>$this->intStockMinimo,
        'Estado'=>$this->strStatus,
        'Color'=>$this->strColor,
        'Material'=>$this->strMaterial,
        'Forma'=>$this->strForma,
        'Tamaño'=>$this->strTamanio);
        return $arrProducto;
    }

    public function setForma(string $strForma){
        $this->strForma=$strForma;
    }

}