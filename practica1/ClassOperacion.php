<?php
 class Operacion{

     public $cantidadUno = 0;
     public $cantidadDos = 0;
     public $resultado = 0;


     function __construct($intcant1,$intcant2){

         $this->cantidadUno = $intcant1;
         $this->cantidadDos = $intcant2;

     }//end contructor

     public function getsuma(){
     $this->resultado = $this->cantidadUno + $this->cantidadDos;
     return $this->resultado;

     }// end getsuma

     public function getresta(){
         $this->resultado = $this->cantidadUno - $this->cantidadDos;
         return $this->resultado;
     }// end getresta

     public function getmultiplicacion(){
         $this->resultado = $this->cantidadUno * $this->cantidadDos;
         return $this->resultado;
     }// end getmultiplicacion

     public function getdivicion(){
         $this->resultado = $this->cantidadUno / $this->cantidadDos;
         return $this->resultado;

     }// end getdivicion

 }// end class Operacion

?>,