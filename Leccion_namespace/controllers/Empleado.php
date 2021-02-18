<?php

namespace Controllers;

/* require_once("../model/Persona.php"); */

require_once("../autoload.php");

use Model\Persona;

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
