<?php
require_once("ClassOperacion.php");
$objRaiz = new Calcular();
echo $objRaiz->raizCuadrada(21);
echo "<br>";
echo $objRaiz->potencia(9, 3);

echo "<br>";

echo "Suma: " . $objRaiz->op_basicas(9, 3, "+");
echo "<br>";
echo "Resta: " . $objRaiz->op_basicas(21, 3, "-");
echo "<br>";
echo "Multiplicacion: " . $objRaiz->op_basicas(9, 3, "*");
echo "<br>";
echo "Division: " . $objRaiz->op_basicas(9, 3, "/");
