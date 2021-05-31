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
        <h1>Registro de promociones</h1>
   <form action="agregar_promociones.php" target="" method="POST" enctype="multipart/form-data">
            <TABLE class = "tabla">
                <TR>
                    <TD><strong>Nombre</strong> </TD>
                    <td><input type=text size=40 name="Nombre"></td>
                </TR>
               
                <TR>
                    <TD><strong>Precio</strong> </TD>
                    <td><input type=text size=40 name="Precio"></td>
                </TR>
                <TR>
                    <TD><strong>Descripcion</strong> </TD>
                    <td><input type=text size=40 name="desc"></td>
                </TR>
                <TR>
                    <TD><strong>ID Producto</strong> </TD>
                    <td><input type=text size=40 name="IDproducto"></td>
                </TR>
                <TR>
                    <TD><strong>Imagen</strong> </TD>
                    <td><input type=file name="imagen" accept="image/*"></td>
                </TR>
            </TABLE>
            <BR>
                <BR>
                <a href="administrar_promociones.php">Regresar</a>
             <input type=submit value="Guardar" >
            </center>
        </form>
        </main>
</body>
</html>
