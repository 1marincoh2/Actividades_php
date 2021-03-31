<?php


class Producto
{
    public $strDescripicion;
    public $fltPrecio;
    protected $intStockMinimo = 10;
    protected $strStatus = "activo";

    public function __construct(string $Descripicion, float $precio)
    {
        $this->strDescripicion = $Descripicion;
        $this->fltPrecio = $precio;
    }

     public function getInfoProducto(){

      $arrProducto = array('producto' => $this->strDescripicion,
                            ' precio' => $this->fltPrecio,
                            'Stock_Minimo' => $this->intStockMinimo,
                            'estado' => $this->strStatus,
          );
          return $arrProducto;

    }
}
?>