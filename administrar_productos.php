<?php
session_start();
include ("Iniciar/con_db.php");
?>
<title>Administraci&oacute;n de productos</title>
<link rel="stylesheet" href="css/adm_css.css">

<?php

if(isset($_SESSION['persona'])){
	if($_SESSION['persona'][0]==1){
		$Query = "select * from producto";
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
		   <h1>Administraci&oacute;n de productos</h1>
		   
			   <table class = "tabla">
				   <thead class = "titulos">
				<tr>
				<td><strong> id_producto</strong></td>
				<td><strong> Nombre</strong></td>
				<td><strong> Precio</strong></td>
				<td><strong> Existencias</strong></td>
				<td><strong> Descripci&oacute;n</strong></td>
				</tr>
				</thead>
				<?php
				while($row =$Result->fetch_array()) {	    
				   ?>
				   <tbody class = "relleno">
				   <tr>
				   <td> <?php printf($row["id_producto"]); ?>   </td>
				   <td> <?php printf($row["nombre"]); ?>   </td>
				   <td> <?php printf("$".$row["precio"].".00"); ?>   </td>
				   <td> <?php printf($row["existencias"]); ?>   </td>
				   <td> <?php printf($row["descripcion"]); ?>   </td>
				   </tr>
				   </tbody>
				</center>
		<?php	
			}
		}
		?>
		</table>
				<br><br><a href="registrar_producto.php">Registro de producto</a>
				<a href="consultar_producto.php">Consultar producto</a>
				<a href="eliminar_producto.php">Eliminar promociones</a>
				<br><br><br><a href="menu_admi.php">Menu principal</a>
				</main>
				<?php
	}else {
        header('Location: Iniciar/formulario_iniciar_sesion.php');
        exit();
    }
}else {
        header('Location: Iniciar/formulario_iniciar_sesion.php');
        exit();
    }
?>