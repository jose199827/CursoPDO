<?php
require_once("ClassOperacion.php");
//Instanciando la Clase para hacer uso de los métodos, mandando los datos requeridos
$operacion1 = new Operacion(10, 2);
$operacion2 = new Operacion(100, 3);
//mandando a llamar el metodo de la suma dentro del objeto
$totalsuma = $operacion1->getsuma();
//Imprimiendo el resultado devuelto
echo "Suma: " . $totalsuma;
echo "<br>";
$totalresta = $operacion1->getresta();
echo "Resta: " . $totalresta;
echo "<br>";
$totalmultiplicacion = $operacion1->getmultiplicacion();
echo "Multiplicacón: " . $totalmultiplicacion;
echo "<br>";
$totaldivicion = $operacion1->getdivicion();
echo "Division: " . $totaldivicion;
echo "<br>";
echo "<br>";
//Operacion 2

//mandando a llamar el metodo de la suma dentro del objeto
$totalsuma = $operacion2->getsuma();
//Imprimiendo el resultado devuelto
echo "Suma: " . $totalsuma;
echo "<br>";
$totalresta = $operacion2->getresta();
echo "Resta: " . $totalresta;
echo "<br>";
$totalmultiplicacion = $operacion2->getmultiplicacion();
echo "Multiplicacón: " . $totalmultiplicacion;
echo "<br>";
$totaldivicion = $operacion2->getdivicion();
echo "Division: " . $totaldivicion;
echo "<br>";
