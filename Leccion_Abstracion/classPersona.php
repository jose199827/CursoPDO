<?php
abstract class Persona
{
  public $intDpi;
  public $strNombre;
  public $intEdad;
  function __construct(int $dpi, string $nombre, int $edad)
  {
    $this->intDpi = $dpi;
    $this->strNombre = $nombre;
    $this->intEdad = $edad;
  }
  //Metodos
  abstract public function getDatosPersonale();
  abstract public function setMensaje(string $mensaje);
  abstract public function getMensaje(): string;
}
