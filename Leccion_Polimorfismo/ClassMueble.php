<?php
require_once("ClassProducto.php");
class Mueble extends Producto
{
  public $strColor;
  public $strMaterial;
  public $strStatus = "Agotado";

  public  function __construct(string $descripcion, float $precio, string $marca, string $color, string $material)
  {
    parent::__construct($descripcion, $precio);

    $this->strMaterial = $material;
    $this->strColor = $color;
  }
 public function getInfoProducto()
  {
    $arrProducto = array(
      'Producto' => $this->strDescripcion,
      'Precio ' => $this->fltPrecio,
      'Stok Minimo' => $this->intStockMinimo,
      'Color ' => $this->strColor,
      'Material' => $this->strMaterial,
      'Estado' => $this->strStatus
    );
    return $arrProducto;
  }
}
