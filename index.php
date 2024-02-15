<?php
    require_once ('leccion1/ClassOperacion.php');
    $operacion=new Operacion(10,20);
    
    $suma=$operacion->getSuma();
    echo "Suma: ".$suma; 
    echo "<br>";
    
    $resta=$operacion->getResta();
    echo "Resta: ".$resta;
    echo"<br>";
    
    $multiplicacion=$operacion->getMultiplicacion();
    echo"Producto: ".$multiplicacion;
    echo "<br>";
    
    $division=$operacion->getDivision();
    echo "Division:".$division;
?>