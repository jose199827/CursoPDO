<?php
/* require_once("ClassEmpleado.php");
require_once("ClassCliente.php"); */

require_once("autoload.php");

$objempleado1 = new Empleado(77, "Jose", 23);
$objempleado1->setPuesto("Administrador");

echo $objempleado1->getDatosPersonale();
echo "Puesto: " . $objempleado1->getPuesto();

$objcliente1 = new Cliente(23, "Hellen", 25);
$objcliente1->setCredito(100);

echo $objcliente1->getDatosPersonale();
echo "Credito: " . $objcliente1->getCredito();
