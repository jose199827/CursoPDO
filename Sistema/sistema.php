<?php
require_once("Autoload.php");

$objUsuario = new Usuario();

//insertando usuario

/* $insert = $objUsuario->InsertUsuario("Banessa Aleman", 99990202, "bane@gmail.com");
echo $insert; */


//Extrae los registros
$users = $objUsuario->getUsuario();
echo "<pre>";
print_r($users);
echo "</pre>";

$update = $objUsuario->updateUser(5, "Jose Pineda", 98744188, "Jose@gmail.com");
echo $update;

//Extrae los registros
$user = $objUsuario->unRegistro(5);
echo "Se manda a traer solo un registro<pre>";
print_r($user);
echo "</pre>";

$delete = $objUsuario->deleteUser(1);
