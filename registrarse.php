<?php 

include("Iniciar/con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['celular']) >= 1
	&& strlen($_POST['email']) >= 1 && strlen($_POST['contraseña']) >= 1) {

	    $nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$celular = trim($_POST['celular']);
	    $email = trim($_POST['email']);
		$contraseña = trim($_POST['contraseña']);


	    $consulta = "INSERT INTO persona(nombre, apellido, celular, email, contraseña) 
		VALUES ('$nombre','$apellido','$celular','$email','$contraseña')";
		$resultado = mysqli_query($conex,$consulta);

		$lastid = mysqli_insert_id($conex);
		$consulta2 = "INSERT INTO cliente(d_calle_Ac, d_colonia, d_numero, d_referencia, id_persona) 
		VALUES ('NA','NA','NA','NA','$lastid')";
		$resultado2 = mysqli_query($conex,$consulta2);
		

		mysqli_close($conex);


	    if ($resultado2) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3><br><br>
			<a class="visualizar" href="Iniciar/formulario_iniciar_sesion.php">Iniciar Sesion</a>
           <?php
		   
	    } else {
	    	?> 
	    	<h3 class="bad">¡Lo sentimos, ya hay un usuario con esos datos!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>