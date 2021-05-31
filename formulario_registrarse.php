<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/Registro.css?v=<?php echo time();?>" >
</head>
<body>
    <form method="post" autocomplete="off">
    	<h1>Registrarse</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="apellido" placeholder="Apellido">
		<input type="text" name="celular" placeholder="Celular">
    	<input type="email" name="email" placeholder="Correo electrónico">
		<input type="password" name="contraseña" placeholder="Contraseña">

    	<input type="submit" value= "Registrarse" name="register">
    	<br><br>
		<a href="Iniciar/formulario_iniciar_sesion.php">Iniciar Sesi&oacute;n</a>
    </form>
        <?php 
        include("registrarse.php");
        ?>
</body>
</html>