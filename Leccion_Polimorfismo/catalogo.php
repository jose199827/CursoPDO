<?php
require_once("ClassMesa.php");

$objCama= new Producto("Cama", 10500);
$arrInfoProducto= $objCama->getInfoProducto();
print_r("<pre>");
print_r($arrInfoProducto);
print_r("</pre>");

echo "<br>";

$objMueble= new Mueble("Closet", 20000, "La cosa", "Rojo","Madera");
$arrInfoProductoMueble= $objMueble->getInfoProducto();
print_r("<pre>");
print_r($arrInfoProductoMueble);
print_r("</pre>");

echo "<br>";

$objMesa= new Mesa("Mesa Comedor", 13500, "La Masa", "Rojo","Madera","Grande");
$objMesa->setForma("Redonda");
$arrInfoProductoMesa= $objMesa->getInfoProducto();
print_r("<pre>");
print_r($arrInfoProductoMesa);
print_r("</pre>");
