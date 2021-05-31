<?php
session_start();
include("Iniciar/con_db.php");
    
    $iddd = $_GET['del'];
    $cel = $_GET['cel'];
    $Query = "delete from empleado where id_empleado='".$iddd."'";
    $Result = $conex->query( $Query );
    $Query = "delete from persona where celular='".$cel."'";
    $Result = $conex->query( $Query );
    
    if($Result!=null){
        header("Location: eliminar_empleados.php");
        exit();
    }else{
       print("No se pudo eliminar");
    }
    ?>
