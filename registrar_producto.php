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
        <h1>Registro de productos</h1>
   <form action="agregar_producto.php" target="" method="POST" enctype="multipart/form-data">
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
                    <TD><strong>Existencias</strong> </TD>
                    <td><input type=text size=40 name="Existencias"></td>
                </TR>
                <TR>
                    <TD><strong>Descripcion</strong> </TD>
                    <td><input type=text size=40 name="Descripcion"></td>
                </TR>
                <TR>
                    <TD><strong>Imagen</strong> </TD>
                    <td><input type=file name="image" accept="image/*"></td>
                </TR>
            </TABLE>
            <BR>
                <BR>
                <a href="administrar_productos.php">Regresar</a>
             <input type=submit value="Guardar" >
            </center>
        </form>
        </main>
        <?php
        ?>
        </body>
</html>
