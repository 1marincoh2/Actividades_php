<?php

require_once ("ClassOperacion.php");

$objRaiz = new Calcular();

echo $objRaiz->RaizCuadrada(9);
echo "<br><br>";


echo $objRaiz->Potencia(9,3);
echo "<br><br>";

echo $objRaiz-> Op_Basica(150,54,"a");
?>
