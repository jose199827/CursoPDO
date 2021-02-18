<?php
require_once("Classtiebda.php");

$objProducto = new Tienda();

$strProducto = "Teclado";
$fltPrecio = 985;
$intStock = 15;

$intCarrito = 3;

$objProducto->setProducto($strProducto, $fltPrecio, $intStock);

echo $objProducto->getProducto();
echo "<br>";
$objProducto->setCarrito($strProducto, $intCarrito);
$objProducto->setStock($intCarrito);
echo $objProducto->getCarrito();
echo "<br>";
echo $objProducto->getProducto();
