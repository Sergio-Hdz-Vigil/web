<?php 
session_start();

$sErr="";
$sCve="";
$sNom="";


	/*Verificar que hayan llegado los datos*/
	$nombre_cliente = $_SESSION['persona'][1];
	
	if (isset($_SESSION['persona'])){
		session_destroy();
	}else
	    $sErr = "Falta establecer el login";
	
	if ($sErr == ""){
	    
	    echo '<!DOCTYPE html>
        <html>
        <head>
        <title>Cerrar sesión</title>
        <meta charset="utf-8">
	    <link rel="stylesheet" href="../css/logout.css?v=<?php echo time();?>">
        </head>
        <body>	
	    <br><br><br>';
	    
	    echo "<center>";
		echo "<h1>Pie de molcajete</h1>";
		echo "<h4>¡Gracias por tu visita ".$nombre_cliente."!</h4>";
		echo "<h4>Esperamos que vuelvas pronto...</h4>";
		echo "<h4>¡Buen día!</h4>";
		echo "<a href= ../index.php>Volver al inicio</a>";
		echo "</center>";
	    
	} else{
		header("Location: ../error.php?sError=".$sErr);
	    exit();
	}
?>
</body>
</html>