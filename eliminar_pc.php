<?php
include("Iniciar/con_db.php");

    $iddd = $_GET['id'];
    $Query = "delete from cliente_producto where id_producto='".$iddd."'";
    $Result = $conex->query( $Query );
    if($Result!=null)
        header("Location: carrito.php");
 else
       print("No se pudo eliminar");
    ?>