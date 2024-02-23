<?php

require_once('ClassMesa.php');

$objCama = new Producto("Cama",99.22);
$arrInfProducto=$objCama->getInfoProducto();

print_r('<pre>');
print_r($arrInfProducto);
print_r('</pre>');
echo "<br>";

$objSofa=new Mueble("Negro",'Madera',"Activo","sofa cuero",299.99);

$arrInfMueble=$objSofa->getInfoProducto();
print_r('<pre>');
print_r($arrInfMueble);
print_r('</pre>');
echo '<br>';

$objMesa=new Mesa('Azul','madera','Activo','Mesa',399.99,"Largo");
$objMesa->setForma('Cuadrada');
$arrInfMesa=$objMesa->getInfoProducto();
print_r('<pre>');
print_r($arrInfMesa);
print_r('</pre>');
echo '<br>';