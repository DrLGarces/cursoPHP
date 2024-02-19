<?php 

require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objEmpleado=new Empleado(28566,'luis',22);
$objEmpleado->setPuesto('gerente');
echo $objEmpleado->getDatosPersonales();
echo $objEmpleado->getPuesto();


echo "<br><br>";

$objCliente=new Cliente(24989,'fer',16);
$objCliente->setCredito(45.34);
echo $objCliente->getDatosPersonales();
echo $objCliente->getCredito();