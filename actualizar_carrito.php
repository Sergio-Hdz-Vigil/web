<?php
session_start();
include("Iniciar/con_db.php");

if (isset($_POST['cantidad']) && isset($_POST['producto'])){
    $cantidad = $_POST['cantidad'];
    $producto = $_POST['producto'];
    $Query = "UPDATE cliente_producto set unidades =".$cantidad." where id_cliente = ".$_SESSION['cliente'][0]." AND id_producto =".$producto;
    $Result = $conex->query( $Query );
    header("Location: carrito.php");
}else{
    echo "NO HAY CANTIDAD A CAMBIAR";
    echo "<a href='carrito.php'>Volver a carrito</a>";
}



?>