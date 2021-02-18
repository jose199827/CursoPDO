<?php
class Usuario extends Conexion
{
  private $strNombre;
  private $intTelefono;
  private $strEmail;
  private $conexion;

  public function __construct()
  {
    $this->conexio = new Conexion();
  }
}
