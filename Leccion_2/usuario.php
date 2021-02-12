<?php
require_once("ClassUsuario.php");
$objUsuario1 = new Usuario("Jose Pineda", "Jose@gmail.com", "Admin");
$objAndrea = new Usuario("Andrea Arana", "Andrea@gmail.com", "Cliente");
echo $objUsuario1->getPerfil();
echo "<br>";
echo $objAndrea->getPerfil();
$objAndrea->setCambiarClave("ANDREA1234");
echo "<br>";
echo $objAndrea->getPerfil();
