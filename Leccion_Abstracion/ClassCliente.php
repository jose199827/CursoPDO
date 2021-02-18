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

  public function getDatosPersonale()
  {
    $datos = "
    <h2>DATOS PERSONALES</h2>
    DPI: {$this->intDpi}<br>
    Nombre: {$this->strNombre}<br>
    Edad: {$this->intEdad}<br>
    ";
    return $datos;
  }
  public function setMensaje(string $mensaje)
  {
    $this->strMensaje = $mensaje;
  }
  public function getMensaje(): string
  {
    return $this->strMensaje . " " . $this->strNombre;
  }
}
