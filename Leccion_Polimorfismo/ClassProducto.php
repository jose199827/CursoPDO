<?php
class Producto
{
  public $strDescripcion;
  public $fltPrecio;
  protected $intStockMinimo = 10;
  protected $strStatus = "Activo";

  public function __construct(string $descripcion, float $precio)
  {
    $this->strDescripcion = $descripcion;
    $this->fltPrecio = $precio;
  }
  public function getInfoProducto()
  {
    $arrProducto = array(
      'Producto' => $this->strDescripcion,
      'Precio ' => $this->fltPrecio,
      'Stok Minimo' => $this->intStockMinimo,
      'Estado' => $this->strStatus
    );
    return $arrProducto;
  }
}//Final de la case
