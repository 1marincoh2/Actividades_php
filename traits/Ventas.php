<?php
require_once ("ClassTienda.php");

$objProducto = new Tienda();

$strProducto ="Teclado";
$ftlPrecio = 110;
$intStock = 15;

$intCantidadVentdida= 3;

$objProducto->setProcduto($strProducto,$ftlPrecio,$intStock);

 echo $objProducto->getProcduto();

$objProducto->setCarrito($strProducto,$intCantidadVentdida);
$objProducto->setStock($intCantidadVentdida);
echo $objProducto->getProcduto();

echo $objProducto->getCarrito();


?>
