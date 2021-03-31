<?php

trait Producto{

    public $strProducto;
    public $ftlPrecio;
    public  $intStock;

    public function setProcduto(string $producto,float $precio,int $stock){
        $this->strProducto = $producto;
        $this->fltPrecio = $precio;
        $this->intStock = $stock;

    }
    public function getProcduto():string{
        $strinfo="producto:{$this->strProducto}<br>
         precio:{$this->fltPrecio}<br>
         stock:{$this->intStock}<br><br>    
";
        return $strinfo;
    }

    public function setStock(int $cantidad){

        $this->intStock = $this->intStock -$cantidad;

    }
}

?>
