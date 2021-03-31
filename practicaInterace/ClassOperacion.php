<?php

require_once ("Operacion.php");
require_once ("OperacionBasica.php");

class Calcular implements Operacion,Operacion_Basica {

    public function RaizCuadrada(float $numero):float{
        $total= sqrt($numero);
        return  $total;

    }

    public function Potencia(int $numero,int $potencia):int{
        $total= pow($numero,$potencia);
        return  $total;

    }

    public function Op_Basica(float $num1,float $num2, string $operacion){
        if ($operacion == "+")
        {
           $reultado=$num1 + $num2;
        }else if($operacion == "-"){

            $reultado = $num1 - $num2;
        }else if ($operacion == "*"){
            $reultado =$num1 * $num2;
        }else if ($operacion == "/"){
            $reultado = $num1 / $num2;

        }else{
             $reultado= "operacion no valida";
        }
        return $reultado;
    }
}// end class Calcular
?>