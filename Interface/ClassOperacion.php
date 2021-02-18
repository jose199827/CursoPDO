<?php
require_once("Operacio.php");
require_once("OperacioneBasicas.php");
class Calcular implements operacion, operacion_basica
{
  public function raizCuadrada(float $numero): float
  {
    $total = sqrt($numero);
    return $total;
  }
  public function potencia(int $numero, int $potencia): int
  {
    $total = pow($numero, $potencia);
    return $total;
  }
  public function op_basicas(float $num1, float $num2, string $operacion)
  {
    if ($operacion == "+") {
      $resultado = $num1 + $num2;
    } elseif ($operacion == "-") {
      $resultado = $num1 - $num2;
    } elseif ($operacion == "*") {
      $resultado = $num1 * $num2;
    } elseif ($operacion == "/") {
      $resultado = $num1 / $num2;
    } else {
      $resultado = "Operacion no valido";
    }



    return $resultado;
  }
}
