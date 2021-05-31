<?php
session_start();
include("Iniciar/con_db.php");
?>
    <title>Eliminar promocion</title>
    <link rel="stylesheet" href="css/adm_css.css">
<?php
    $iddd = $_GET['del'];
    $Query = "delete from promociones where id_promocion='".$iddd."'";
    $Result = $conex->query( $Query );
    if($Result!=null){
        ?>
        <h1>Se elimino con éxito la promocion.</h1>
        <?php
        echo "<center><br><a href= administrar_promociones.php>Regresar</a></center>";}
 
 else
       print("No se pudo eliminar");
    ?>
