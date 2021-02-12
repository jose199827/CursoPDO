<?php
class Usuario
{
  private $strNombre;
  private $strEmail;
  private $strTipo;
  private $strClave;
  protected $strFechaRegistro;
  static $strEstado = "Activo"; //Solo le pertenece a la clase no al objeto. Se manda a llamar de la siguiente manera NOMBREDELACLASE::LAPROPIEDAD. 
  function __construct(string $nombre, string $email, string $tipo)
  {
    $this->strNombre = $nombre;
    $this->strEmail = $email;
    $this->strTipo = $tipo;
    $this->strClave = rand();
    $this->strFechaRegistro = date('y-m-d H:m:s');
  }
  //Metodos
  public function getNombre(): string
  {
    return $this->strNombre;
  }
  public function getEmail(): string
  {
    return $this->strEmail;
  }
  public function getTipo(): string
  {
    return $this->strTipo;
  }
  public function getPerfil()
  {
    echo "Datos del usuario <br>";
    echo "Nombre: " . $this->strNombre . "<br>";
    echo "Email: " . $this->strEmail . "<br>";
    echo "Tipo: " . $this->strTipo . "<br>";
    echo "Fecha registro: " . $this->strFechaRegistro . "<br>";
    echo "Clave: " . $this->strClave . "<br>";
    echo "Estado: " . self::$strEstado . "<br>";
  }
  //Los metodos con get sirver para enviar la información y mostrarlas

  //Los metodos set sirven para resivir la informacion
  public function setCambiarClave(string $pass)
  {
    $this->strClave = $pass;
  }
}//Cierre de la clase usuario
