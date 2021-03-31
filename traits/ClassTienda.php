<?php
 require_once ("Producto.php");
 require_once ("Carrito.php");

class Tienda
{
  use Producto, Carrito;
   public $ftlTotal = 0;
  public function getCarrito()
  {
      $this->ftlTotal = $this->intCantidad * $this->fltPrecio;

      $infoCarrito =" <h2>Carrito de Tienda</h2>
                    <hr>
                    Prodcuto: {$this->strProducto}<br>
                    Catidad: {$this->intCantidad}<br>
                     precio:{$this->fltPrecio}<br>
                    Total:{$this->ftlTotal}<br>
  ";
      return $infoCarrito;
  }
}
?>