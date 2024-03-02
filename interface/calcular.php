<?php 

require_once('ClassOperation.php');


$objraiz=new Calcular();
echo $objraiz->raizCuadrada(10)."<br>";


$objOperacioenes=new Calcular();
echo $objOperacioenes->op_basicas(2,3,'+');
