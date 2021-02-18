<?php
require_once("ClassEmpleado.php");
require_once("ClassCliente.php");

$objPersona = new Empleado(12, "Jose", 23);

$objPersona->setPuesto("Admin");
$objPersona->setMensaje("Hola, esto es un mensaje de bienveniida!!!");
echo $objPersona->getMensaje();
echo $objPersona->getDatosPersonale();
echo "Puesto: " . $objPersona->getPuesto();

echo "<br>";

$objcliente1 = new Cliente(23, "Hellen", 25);
$objcliente1->setCredito(100);

$objcliente1->setMensaje("Hola, bienvenido cliente!!!");
echo $objcliente1->getDatosPersonale();
echo $objcliente1->getMensaje();
echo "Credito: " . $objcliente1->getCredito();
