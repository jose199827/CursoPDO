<?php
require_once("Autoload.php");
class Usuario extends Conexion
{
  private $strNombre;
  private $intTelefono;
  private $strEmail;
  private $conexion;

  public function __construct()
  {
    $this->conexion = new Conexion();
    $this->conexion = $this->conexion->connect();
  }
  public function InsertUsuario(string $nombre, int $telefono, string $email)
  {
    $this->strNombre = $nombre;
    $this->intTelefono = $telefono;
    $this->strEmail = $email;

    $sql = "INSERT INTO usuario(nombre,telefono,email) VALUES(?,?,?);";
    $insert = $this->conexion->prepare($sql);
    $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
    $resInsert = $insert->execute($arrData);
    $idInsert = $this->conexion->lastInsertId();
    return $idInsert;
  }
  public function getUsuario()
  {
    $sql = "SELECT * FROM `usuario`";
    $execute = $this->conexion->query($sql);
    $request = $execute->fetchall(PDO::FETCH_ASSOC);
    return $request;
  }
  public function updateUser(int $id, string $nombre, int $telefono, string $email)
  {
    $this->strNombre = $nombre;
    $this->intTelefono = $telefono;
    $this->strEmail = $email;

    $sql = "UPDATE `usuario` SET `Nombre` = ?,`Telefono`=?,`Email`=? WHERE `usuario`.`Id` = $id;";
    $update = $this->conexion->prepare($sql);
    $arrData = array($this->strNombre, $this->intTelefono, $this->strEmail);
    $resExecute = $update->execute($arrData);
    return $resExecute;
  }
  public function unRegistro(int $id)
  {
    $sql = "SELECT * FROM `usuario` WHERE `usuario`.`Id` = ?;";
    $query = $this->conexion->prepare($sql);
    $arrWhere =  array($id);
    $query->execute($arrWhere);
    $request = $query->fetch(PDO::FETCH_ASSOC);
    return $request;
  }
  public function deleteUser(int $id)
  {
    $sql = "DELETE FROM `usuario` WHERE `usuario`.`Id` = ?;";
    $delete = $this->conexion->prepare($sql);
    $arrWhere =  array($id);
    $del = $delete->execute($arrWhere);
    return $del;
  }
}
