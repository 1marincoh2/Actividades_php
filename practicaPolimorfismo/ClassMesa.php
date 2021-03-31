<?php
require_once ("ClassMueble.php");

class Mesa extends Mueble {

    private $strForma = "";
    protected $strTamanio ;
    public  $strStatus = "activo";

    public  function __construct(string $Descripicion, float $precio, string $marca, string $color, string $marterial, string  $tamanio){
        parent::__construct($Descripicion, $precio, $marca, $color, $marterial);

        $this->strTamanio = $tamanio;

    }
   public function setForma(string $forma){

        $this->strForma = $forma;
   }

    public function getInfoProducto(){

        $arrProducto = array('producto' => $this->strDescripicion,
            ' precio' => $this->fltPrecio,
            'Stock_Minimo' => $this->intStockMinimo,
            'estado' => $this->strStatus,
            'Marca' => $this->strMarca,
            'color' => $this->strColor,
            'material' => $this->strMaterial,
            'Tamaño' => $this->strTamanio,
            'Forma' => $this->strForma,
        );
        return $arrProducto;

    }
}// en de Classe Mesa

?>