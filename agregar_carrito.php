<?php
include ("Iniciar/con_db.php");
session_start();
?>
<?php
    if (isset($_POST['id_p']) && isset($_SESSION['cliente'])) { 
        $idp = $_POST['id_p'];
        $Query = "SELECT * FROM cliente_producto WHERE id_cliente =".$_SESSION['cliente'][0]."
                AND id_producto = ".$idp."";

                $resultado = mysqli_query($conex,$Query);
                if($resultado->num_rows > 0){         
                    $Query = "UPDATE cliente_producto SET unidades = unidades+1 
                    WHERE id_cliente =".$_SESSION['cliente'][0]." AND id_producto = ".$idp."";
                         $resultado = mysqli_query($conex,$Query);
            }else{
                $Query = "INSERT INTO cliente_producto values (".$_SESSION['cliente'][0].",".$idp.",1)";
                $Result = $conex->query( $Query );
            }
        header("Location: menu_cliente.php");
    }else{
        echo "Error al agregar al carrito ";
    }
?>