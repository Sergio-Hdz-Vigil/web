<?php 
session_start();
include("Iniciar/con_db.php");

if (isset($_POST['calle']) && isset($_POST['colonia']) && isset($_POST['numero_exterior'])
&& isset($_POST['referencia'])){
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
	$nummm = $_POST['numero_exterior'];
    $refr = $_POST['referencia'];

    $Query = "UPDATE cliente set d_calle_Ac ='".$calle."', d_colonia ='".$colonia."', d_numero ='".$nummm."', d_referencia ='".$refr."' where id_persona =".$_SESSION['persona'][0];
    $resultado = mysqli_query($conex,$Query);
    if ($resultado == 1) {
        header("Location: inf_pers.php");
    }else{
        echo "No se actualizaron los datos";
    }
}else{
    echo "campos vacios";
}
