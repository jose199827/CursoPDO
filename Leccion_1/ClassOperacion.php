<?php
class Operacion
{
  public $cantida1 = 0;
  public $cantida2 = 0;
  public $resultado = 0;
  //Constructor de la Clase
  function __construct($intcant1, $intcant2)
  {
    $this->cantida1 = $intcant1;
    $this->cantida2 = $intcant2;
  }
  //Metodos
  public function getsuma()
  {
    $this->resultado = $this->cantida1 + $this->cantida2;
    return $this->resultado;
  }
  public function getresta()
  {
    $this->resultado = $this->cantida1 - $this->cantida2;
    return $this->resultado;
  }
  public function getmultiplicacion()
  {
    $this->resultado = $this->cantida1 * $this->cantida2;
    return $this->resultado;
  }
  public function getdivicion()
  {
    $this->resultado = $this->cantida1 / $this->cantida2;
    return $this->resultado;
  }
}//Cierre de la Clase Operacion
