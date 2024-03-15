<?php 
require_once('ClassTienda.php');

$objProducto=new Tienda();
$NameProduct='Jabón';
$Price=10;
$Quantity=10;


$objProducto->setArticulo($NameProduct, $Price, $Quantity);
echo $objProducto->getArticulo();
$sellQuantity=2;
$objProducto->setCarrito('Jabón',$sellQuantity);
$objProducto->setStock(2);
echo"<br><br><br>";
echo $objProducto->getArticulo();

echo $objProducto->getCarrito();