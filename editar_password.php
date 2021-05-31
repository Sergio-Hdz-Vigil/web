<?php
session_start();
include("Iniciar/con_db.php");

if (!isset($_SESSION['persona'])) {
    header( 'HTTP/1.0 403 NO AUTORIZADO' ); // redirigir
    die();
}

// Determina si la petición es de tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // si vienen los parametros correctamente
    if (isset($_POST['password']) || isset($_POST['new_password']) || isset($_POST['conf_password'])) {
        
        // todo bien -> verificamos que tengan datos
        if (!(empty($_POST['password']) || empty($_POST['new_password']) || empty($_POST['conf_password']))) {
            // Query de mysql

            // 	01 - Confirmar contraseña que sea correcta
            
            $sql = "SELECT contraseña FROM persona WHERE id_persona=".$_SESSION['persona'][0];
            $rs = mysqli_query($conex, $sql);
            $row = mysqli_fetch_row($rs);
            
            if($row[0] == $_POST['password']){
                //	02 - Verificar que contraseña new_password == conf_password (con 3 = verifica que sea string y sea el mismo)
                 if ($_POST['new_password'] === $_POST['conf_password']) {
                        
                     $actualizar = "UPDATE persona SET contraseña ='" . $_POST['new_password'] . "' WHERE id_persona = " . $_SESSION['persona'][0];
                
                    $resultado = mysqli_query($conex, $actualizar); // ejecuta la sentencia haciendo la conexion a la base de datos
                header('Location:inf_pers.php?msj="Contraseña Actualizada"');
                    exit();
                    

                 }else{
                     header('Location:inf_pers.php?msj="No coinciden las contraseñas"');
                    exit();
                 }
            }else{
                header('Location:inf_pers.php?msj="Contraseña Actual Incorrecta"');
                    exit();
            }
            
            
        }else{
            header('Location:inf_pers.php?msj="Sin Datos"');
                    exit();
        }
    }else{
            header('Location:inf_pers.php?msj="Datos Incorrectos"');
                    exit();
        }

} else {
    header('HTTP/1.0 404');
}
