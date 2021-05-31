<?php 

include("Iniciar/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 && strlen($_POST['Celular']) >= 1
	&& strlen($_POST['Email']) >= 1 && strlen($_POST['Cargo']) >= 1 && strlen($_POST['Sueldo']) >= 1) {

	    $nombre = trim($_POST['Nombre']);
		$apellido = trim($_POST['Apellido']);
		$celular = trim($_POST['Celular']);
	    $email = trim($_POST['Email']);
		$cargo = trim($_POST['Cargo']);
		$sueldo = trim($_POST['Sueldo']);


	    $consulta = "INSERT INTO persona(nombre, apellido, celular, email) VALUES ('$nombre','$apellido','$celular','$email')";
		$resultado = mysqli_query($conex,$consulta);
		$lastid = mysqli_insert_id($conex);
		$consulta2 = "INSERT INTO empleado(cargo,sueldo,id_persona) 
		VALUES ('$cargo','$sueldo','$lastid')";
		$resultado2 = mysqli_query($conex,$consulta2);
		

		mysqli_close($conex);
	
	
	    if ($resultado2) {
	
		   header ("Location: administrar_empleados.php");
		   exit();
	    } else {
	    	echo '<title>Agregar empleado</title>
	<link rel="stylesheet" href="css/adm_css.css">
	    	<h3 class="bad">¡Lo sentimos, ya hay un empleado con esos datos!</h3>
			<center><a href="registrar_empleado.php">Volver</a></center>';
         
	    }
    }   else {
	    	 echo '<title>Agregar empleado</title>
	<link rel="stylesheet" href="css/adm_css.css">
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
			<center><a href="registrar_empleado.php">Volver</a></center>
           ';
    }
}
?>