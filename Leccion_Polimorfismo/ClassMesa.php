<?php
require_once("ClassMueble.php");
class  Mesa extends Mueble
{
  public $strForma = "";
  protected $strTamanio;
    public $strStatus = "Activo";

  public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamanio)
  {
    parent::__construct($descripcion, $precio, $marca, $color, $material);
    $this->strTamanio = $tamanio;
  }
  public function setForma(string $forma){
    $this->strForma=$forma;
  }
  public function getInfoProducto()
  {
    $arrProducto = array(
      'Producto' => $this->strDescripcion,
      'Precio ' => $this->fltPrecio,
      'Stok Minimo' => $this->intStockMinimo,
      'Color ' => $this->strColor,
      'Material' => $this->strMaterial,
      'Estado' => $this->strStatus,
      'Tamaño'=>$this->strTamanio,
      'Forma' =>$this->strForma
    );
    return $arrProducto;
  }
}
