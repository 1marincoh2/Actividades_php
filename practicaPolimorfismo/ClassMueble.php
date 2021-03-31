<?php
 require_once ("ClassProducto.php");

class Mueble extends Producto{

    public $strColor;
    public $strMaterial;
    public $strMarca;
    public  $strStatus = "agotado";

    function __construct(string $Descripicion, float $precio, string $marca, string $color, string  $marterial)    {
        parent::__construct($Descripicion, $precio);

        $this->strColor = $color;
        $this->strMaterial = $marterial;
        $this->strMarca = $marca;
    }
    public function getInfoProducto(){

        $arrProducto = array('producto' => $this->strDescripicion,
            ' precio' => $this->fltPrecio,
            'Stock_Minimo' => $this->intStockMinimo,
            'estado' => $this->strStatus,
            'Marca' => $this->strMarca,
            'color' => $this->strColor,
            'material' => $this->strMaterial,
        );
        return $arrProducto;

    }


}

?>