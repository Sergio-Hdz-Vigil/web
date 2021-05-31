<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registro</title>
<link rel="stylesheet" href="css/adm_css.css">
</head>

<body>
<center>
    <main>
        <h1>Registro de empleados</h1>
   <form action="agregar_empleado.php" target="" method="POST">
            <TABLE class = "tabla">
                <TR>
                    <TD><strong>Nombre</strong> </TD>
                    <td><input type=text size=40 name="Nombre"></td>
                </TR>
               
                <TR>
                    <TD><strong>Apellido</strong> </TD>
                    <td><input type=text size=40 name="Apellido"></td>
                </TR>
                <TR>
                    <TD><strong>Celular</strong> </TD>
                    <td><input type=text size=40 name="Celular"></td>
                </TR>
                <TR>
                    <TD><strong>Email</strong> </TD>
                    <td><input type=text size=40 name="Email"></td>
                </TR>
                <TR>
                    <TD><strong>Cargo</strong> </TD>
                    <td><input type=text size=40 name="Cargo"></td>
                </TR>
                <TR>
                    <TD><strong>Sueldo</strong> </TD>
                    <td><input type=text size=40 name="Sueldo"></td>
                </TR>
            </TABLE>
            <BR>
                <BR>
                <a href="administrar_empleados.php">Regresar</a>
             <input type=submit value="Guardar" name = "register">
            </center>
        </form>
        <?php 
        include("agregar_empleado.php");
        ?>
        </main>
</body>
</html>
