<?php
session_start();
include("Iniciar/con_db.php");

if (isset($_POST['celular'])){
    $celular = $_POST['celular'];
    $Query = "UPDATE persona set celular =".$celular." where id_persona =".$_SESSION['persona'][0];
    $Result = $conex->query( $Query );
    header("Location: inf_pers.php");
}else{
    header("Location: inf_pers.php");
}