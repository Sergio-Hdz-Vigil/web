<?php
session_start();
include("Iniciar/con_db.php");
?>
    <title>Eliminar producto</title>
    <link rel="stylesheet" href="css/adm_css.css">
<?php
    $iddd = $_GET['del'];
    $Query = "delete from producto where id_producto='".$iddd."'";
    $Result = $conex->query( $Query );
    if($Result!=null){
        ?>
        <h1>Se elimino con éxito el producto.</h1>
        <?php
        echo "<center><br><a href= administrar_productos.php>Regresar</a></center>";}
 
 else
       print("No se pudo eliminar");
    ?>
