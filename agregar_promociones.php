<?php 
include ("Iniciar/con_db.php");

if(strlen($_POST['Nombre']) >= 1  && strlen($_POST['Precio']) >= 1 
&& strlen($_POST['desc']) >= 1 && strlen($_POST['IDproducto']) >= 1 && isset($_FILES["imagen"])){

//cambiar el strlen por isset
    $rimgs = $_FILES["imagen"]["tmp_name"];
    $nomimg = $_FILES["imagen"]["name"];
    $dir = "img/promociones/";
    $rimgg = $dir.$nomimg;

    if(move_uploaded_file($rimgs, $rimgg)){

    

    $Query= "INSERT INTO promociones (`nombre`, `precio`, `descripcion`, `image_url`, `id_producto`) 
    VALUES ('".$_POST["Nombre"]."','".$_POST["Precio"]."','".$_POST["desc"]."','".$rimgg."','".$_POST["IDproducto"]."')";
    $Result = $conex->query( $Query );
     
		
           
    if($Result!=null){
        header ("Location: administrar_promociones.php");
        exit();
    } else {
            echo '	<title>Registro de promociones</title>
	<link rel="stylesheet" href="css/adm_css.css">
                 <h3 class="bad">¡Lo sentimos, ya hay un producto con esos datos!</h3>
                     <center><a href="registrar_promociones.php">Volver</a></center>';
        }
        
}else{
    echo '	<title>Registro de promociones</title>
	<link rel="stylesheet" href="css/adm_css.css">
    <h3 class="bad">¡Llena todos los campos!</h3>
                     <center><a href="registrar_promociones.php">Volver</a></center>';

}

}else{
    echo '	<title>Registro de promociones</title>
	<link rel="stylesheet" href="css/adm_css.css">';
    echo "<h1>No se guarda</h1>";
}
?>