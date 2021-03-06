<?php
require_once("classPersona.php");
class Empleado extends Persona
{
  protected $srtPuesto;
  public function __construct(int $dpi, string $nombre, int $edad)
  {
    parent::__construct($dpi, $nombre, $edad);
  }

  //metodos
  public function setPuesto(string $puesto)
  {
    $this->srtPuesto = $puesto;
  }
  public function getPuesto(): string
  {
    return $this->srtPuesto;
  }
}
