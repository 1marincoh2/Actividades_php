<?php
//require_once("../Controllers/Empleado.php");
//require_once("../Controllers/Cliente.php");
//require_once ("../Controllers/persona.php");
require_once ("../autoload.php");

use Controllers\Empleado;
use Controllers\Cliente;
use Controllers\Persona;

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

echo "<br><br>";
$objMensaje = new Persona();
echo $objMensaje->Saludar();


?>