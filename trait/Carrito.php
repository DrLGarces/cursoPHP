<?php 

trait Carrito{
    public $strNombreProducto;
    public $intCantidad;

    public function setCarrito(string $strNombreProducto, int $intCantidad){
        $this->strNombreProducto=$strNombreProducto;
        
        $this->intCantidad=$intCantidad;
    }

    abstract function getCarrito();


}