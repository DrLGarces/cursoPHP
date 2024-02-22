<?php

class Producto{

    public $strDescripcion;
    public $fltPrecio;
    protected $intStockMinimo=10;
    Protected $strStatus="Activo";

    public function __construct(string $strDescripcion, float $fltPrecio){
        $this->strDescripcion=$strDescripcion;
        $this->fltPrecio=$fltPrecio;
    }
    

    public function getInfoProducto(){
        $arrProducto=array('Descripción'=>$this->strDescripcion,
        'Precio'=>$this->fltPrecio,
        'Stock Minimo'=>$this->intStockMinimo,
        'Estado'=>$this->strStatus);

        return $arrProducto;
    }
}
