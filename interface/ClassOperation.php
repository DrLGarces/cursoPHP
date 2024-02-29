<?php

require_once('Operation.php');
require_once('OperacionesBasicas.php');


class Calcular implements Operation, OperacionesBasicas{
    public function raizCuadrada(float $numero):float{
        $total= sqrt($numero);
        return $total;
    }

    public function potencia(int $numero, int $potencia):int{
        $total= pow($numero, $potencia);
        return $total;
    }

    public function op_basicas(float $num1, float $num2, string $operacion){

        if($operacion=='+'){
            $result= $num1+$num2;
        }elseif ($operacion=='-'){
            $result=$num1-$num2;
        }elseif ($operacion=='*'){
            $result=$num1*$num2;
        }elseif ($operacion=='/'){
            $result=$num1/$num2;
        }else{
            $result="Operacion no valida";
            return $result;
        }
    }
}