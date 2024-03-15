<?php
require_once("Carrito.php");
require_once("Articulo.php");
Class Tienda {
    use Articulo,Carrito;

    public $fltTotal=0;

    public function getCarrito()
        {
            $this->fltTotal=$this->intCantidad*$this->fltPrecio;

            $infoCarrito="
                <hr>
                Producto: {$this->strNombreProducto}<br>
                Cantidad: {$this->intCantidad}<br>
                Precio: {$this->fltPrecio}<br>
                Total: {$this->fltTotal}<br>
                --------------------------<br>";
        
        return $infoCarrito;
        }
    
}