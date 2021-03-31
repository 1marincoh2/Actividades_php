<?php
require_once ("ClassMesa.php");

  $objCama = new Producto("Cama",10500);
  $arrInfoProducto = $objCama->getInfoProducto();

  print_r('<pre>');
  print_r($arrInfoProducto);
print_r('</pre>');

$objMueble = new Mueble("puerta",1500,"dico","blanco","plastico con madera");
$arrInfoMueble = $objMueble->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMueble);
print_r('</pre>');


$objMesa = New Mesa( "redonda",800,"famsa","plateado","vidrio fino","3.5 mts");
$objMesa ->setForma("redonda con bordes");
$arrInfoMesa = $objMesa->getInfoProducto();

print_r('<pre>');
print_r($arrInfoMesa);
print_r('</pre>');

?>