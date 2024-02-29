<?php 

require_once('ClassOperation.php');

$objRaiz= new Calcular();
$objPotencia=new Calcular();


print_r($objRaiz->op_basicas(10,5,'+')."<br>");
echo $objPotencia->op_basicas(10,5,'-')."<br>";