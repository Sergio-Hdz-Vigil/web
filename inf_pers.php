<?php 
session_start();
include("Iniciar/con_db.php");
include("inf.html");

if (!isset($_SESSION['persona'])) {
    header('HTTP/1.0 403 NO AUTORIZADO'); // redirigir
    die();
}




$consulta = "select nombre, celular, d_calle_Ac, d_colonia, d_numero, d_referencia
from persona 
natural join cliente
where cliente.id_persona =".$_SESSION['persona'][0];
$resultado = mysqli_query($conex,$consulta);

if($resultado->num_rows > 0){
    while($row = mysqli_fetch_array($resultado)){
        $dom_exist = false;
        if (!empty($row[2])) {
            $dom_exist = true;
            $direccion = $row[2] . ", Col. " . $row[3] . ", #" . $row[4] . ", Ref. " . $row[5];
        }
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Editar información</title>
            <meta charset="utf-8">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        </head>
        <body>
        <center>
            <table class="default">
            
                <tr>
                    <td><img src="img/perfil.jpg" width="50%" align="middle"></td>
                    <td><h1>Editar información personal</h1></td>
                </tr>
                <table class="default">
                    <tr>
                        <td><h3>Nombre: </h3></td>
                        <td><?php echo $row[0]; ?></td>
                    </tr>
        
                    <tr>
                        <td><h3>Teléfono: </h3></td>
                        <td><input type="phone" name="telefono" value="<?php echo $row[1]; ?>" placeholder=""
                                   disabled="disabled"></td>
                        <td><input type="button" name="editar_phone" id="editar_phone" value="Editar"></td>
                    </tr>
                    <?php // modificar telefono  ?>
        
        
                    <tr id="modificar_phone" hidden="hidden">
                        <form action="editar_phone.php" method="post" autocomplete="off">
                            <td></td>
                            <td><input type="number" name="celular" value="<?php echo $row[1]; ?>"
                                       placeholder="Ingresa el téléfono nuevo" required></td>
                            <td><input type="submit" name="guardar_phone" value="Guardar"></td>
                        </form>
                    </tr>
                    <tr>
                        <td><h3>Dirección: </h3></td>
                        <td><input type="text" name="direccion" value="<?php echo $direccion; ?>" placeholder=""
                                   disabled="disabled"></td>
                        <td><input type="button" name="editar_street" id="editar_street" value="Editar"></td>
        
                        <?php // modificar direccion  ?>
        
                    <tr id="modificar_domicilio_t" hidden="hidden">
        
                        
                        <td>Calle o Av:</td>
                        <td>Colonia:</td>
                        <td>Número Ext:</td>
                        <td>Referencia:</td>
                        <td></td>
                    </tr>
        
                    <?php // modificar direccion  ?>
        
                    <tr id="modificar_domicilio_f" hidden="hidden">
                        <form action="editar_street.php" method="post" autocomplete="off" >
                            <td><input type="text" name="calle" value="<?php echo $row[2]; ?>"
                                       placeholder="Ingresa la calle" required></td>
                            <td><input type="text" name="colonia" value="<?php echo $row[3]; ?>" placeholder="" required>
                            </td>
                            <td><input type="text" name="numero_exterior" value="<?php echo $row[4]; ?>" placeholder=""
                                       required></td>
                            <td><input type="text" name="referencia" value="<?php echo $row[5]; ?>" placeholder=""></td>
                            <td><input type="submit" name="guardar_street" value="Guardar"></td>
                        </form>
                    </tr>
                    </tr>
        
                    <tr>
                        <td><h3>Contraseña: </h3></td>
                        <td><input type="password" name="contraseña" placeholder="*****" disabled="disabled"></td>
                        <td><input type="button" name="editar_password" id="editar_password" value="Editar"></td>
                    </tr>
                    <?php // modificar contraseña  ?>
        
        
                    <tr id="modificar_password" hidden="hidden">
                        <form method="post" autocomplete="off" action="editar_password.php">
                            <td>Contraseña actual:</td>
                            <td><input type="password" name="password" placeholder="Ingresa contraseña actual" required></td>
                            <td>Contraseña nueva:</td>
                            <td><input type="password" name="new_password" placeholder="Ingresa contraseña nueva" required></td>
                            <td>Confirmar contraseña:</td>
                            <td><input type="password" name="conf_password" placeholder="Confirmar contraseña" required></td>
                            <td><input type="submit" name="guardar_password" value="Guardar"></td>
                        </form>
                    </tr>
        </center>
        </table>
        
        <?php
            if(isset($_REQUEST["msj"])){
                echo "<h2> ".$_REQUEST["msj"]." </h2>";
            }
        ?>
        
        <a href="menu_cliente.php">Regresar</a>
    <?php
    }
}
    ?>

<script type="text/javascript">
    $(document).ready(function () {
        $('#editar_street').on('click', function () {
            $('#modificar_domicilio_t').removeAttr("hidden");
            $('#modificar_domicilio_f').removeAttr("hidden");
        });

        $('#editar_phone').on('click', function () {
            $('#modificar_phone').removeAttr("hidden");
        });

        $('#editar_password').on('click', function () {
            $('#modificar_password').removeAttr("hidden");
        });
    });
</script>
</body>
</html>
