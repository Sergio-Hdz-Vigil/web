<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ventas totales</title>
	<link rel="stylesheet" href="css/adm_css.css">
</head>
<body>


<?php
include ("Iniciar/con_db.php");
$Query = "select * from venta";
$Result = $conex->query( $Query );


$numeroRegistros=$Result->num_rows;
if($numeroRegistros<=0) 
   { 
     echo "<div align='center'>"; 
     echo "<h2>No se encontraron resultados</h2>"; 
     echo "</div><hr> "; 
   }else{
   ?>
   <main>
   <center>
   <h1>Ventas totales</h1>
   
       <table class = "tabla">
		   <thead class = "titulos">
        <tr>
		<td><strong> N&uacute; de venta</strong></td>
		<td><strong> Precio</strong></td>
		<td><strong> M&eacute;todo de pago</strong></td>
		<td><strong> Fecha</strong></td>
		<td><strong> Descripci&oacute;n</strong></td>
		<td><strong> N&uacute; del cliente</strong></td>
		</tr>
		</thead>
		<?php
        while($row =$Result->fetch_array()) {	    
           ?>
		   <tbody class = "relleno">
		   <tr>
		   <td> <?php printf($row["id_venta"]); ?>   </td>
		   <td> <?php printf("$".$row["precio"].".00"); ?>   </td>
		   <td> <?php printf($row["metodo_pago"]); ?>   </td>
		   <td> <?php printf($row["fecha"]); ?>   </td>
		   <td> <?php printf($row["desc_vent"]); ?>   </td>
		   <td> <?php printf($row["id_cliente"]); ?>   </td>
           </tr>
		   </tbody>
		   
		</center>
<?php	
	}
}
?>
</table>
		<br><a href="menu_admi.php">Volver</a>
		</main>

</body>
</html>
