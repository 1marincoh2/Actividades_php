<?php
require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objEmpleado = new Empleado( 7025678, "jose marin", 25);
$objEmpleado->setPuesto("administrador");
$objEmpleado->setMensaje("Bienvenido jose marin");

echo $objEmpleado->getMensaje();
echo $objEmpleado->getDatosPersonales();
echo "Puesto:" . $objEmpleado->getPuesto();

echo "<br><br>";
$objCliente = new Cliente(139304123, "alina marin", 10);
$objCliente->setCredito(20000);
$objCliente->setMensaje("Bienvenida Alina Marin");

echo $objCliente->getMensaje();
echo $objCliente->getDatosPersonales();
echo "Credito:" . $objCliente->getCredito();


?>