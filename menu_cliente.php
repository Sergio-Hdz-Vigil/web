<?php
session_start();
include_once("cliente_registrado.html"); 
$nombre_cliente = $_SESSION['persona'][1];
echo "<center><h1 style = 'color = #fff'>¡Que bien verte por aquí ".$nombre_cliente.", mira nuestros productos!</h1></center>";
include_once("cat_prod_reg.php");
include_once("footer.html");
?>