<?php

 abstract class Persona
{
    public $intDpi;
    public $strNombre;
    public $intEdad;

    function __construct(int $Dpi, string $nombre, int $edad)
    {
        $this->intDpi = $Dpi;
        $this->strNombre = $nombre;
        $this->intEdad = $edad;
    }

   abstract public function getDatosPersonales();
    /*{
        $datos = "
       <h2>DATOS PERSONALES<h2>
       DPI:{$this->intDpi}<br>
       Nombre:{$this->strNombre}<br>
       Edad:{$this->intEdad}<br>  
    ";
        return $datos;
    }*/

     abstract public function setMensaje(string $mensaje);
     abstract public function getMensaje():string;
}// end class Operacion

?>,