
<?php
    trait Articulo{
        public $strArticulo;
        public $fltPrecio;
        public $intStock;

        public function setArticulo(string $Articulo, float $precio, int $stock){
            $this->strArticulo=$Articulo;
            $this->fltPrecio=$precio;
            $this->intStock=$stock;
        }



        public function getArticulo():string{
            $strInfor="
                Nombre: {$this->strArticulo} <br>
                Precio: {$this->fltPrecio} <br>
                Stock: {$this->intStock}";

            return $strInfor;
        }

        public function setStock(int $cantidad){
            $this->intStock=$this->intStock-$cantidad;
        }
        

    }