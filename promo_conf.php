<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar eliminacion</title>
    <link rel="stylesheet" href="css/adm_css.css">
</head>
<body>
    <?php 
    $id = $_GET['id'];
    ?>
    <center>
    <h1>¿Est&aacute; seguro que desea eliminar la promocion?</h1>
    <a href="eliminar_promo2.php? id=<?php print($id); ?>">SI</a>
    <a href="administrar_promociones.php">CANCELAR</a>
    </center>
</body>
</html>