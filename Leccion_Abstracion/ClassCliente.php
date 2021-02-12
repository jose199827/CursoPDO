<?php
require_once("classPersona.php");
class Cliente extends Persona
{
  protected $fltcredito;
  public function __construct(int $dpi, string $nombre, int $edad)
  {
    parent::__construct($dpi, $nombre, $edad);
  }

  //metodos
  public function setCredito(string $credito)
  {
    $this->fltcredito = $credito;
  }
  public function getCredito(): float
  {
    return $this->fltcredito;
  }
}
