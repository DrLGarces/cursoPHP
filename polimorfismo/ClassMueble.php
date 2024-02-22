<?php

require_once('ClassProducto.php');

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strStatus="Agotado";

    public function __construct($strColor,$strMaterial,$strStatus,$strDescripcion,$fltPrecio){
        
        parent::__construct($strDescripcion,$fltPrecio);

        $this->strColor=$strColor;
        $this->strMaterial=$strMaterial;
        $this->strStatus=$strStatus;
    }

    public function getInfoProducto(){
        $arrProducto=array('Descripción'=>$this->strDescripcion,
        'Precio'=>$this->fltPrecio,
        'Stock Minimo'=>$this->intStockMinimo,
        'Estado'=>$this->strStatus,
        'Color'=>$this->strColor,
        'Material'=>$this->strMaterial);
        return $arrProducto;
    }
}