<?php
session_start();
include ("Iniciar/con_db.php");
?>
<title>Consulta de promociones</title>
<link rel="stylesheet" href="css/adm_css.css">
<?php
if(isset($_SESSION['persona'])){
	if($_SESSION['persona'][0]==1){
		$Query = "select * from promociones";
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
		   <h1>Consulta de promociones</h1>
		   
			   <table class = "tabla">
				   <thead class = "titulos">
				<tr>
				<td><strong> id_promocion</strong></td>
				<td><strong> Nombre</strong></td>
				<td><strong> Precio</strong></td>
				<td><strong> id_producto</strong></td>
				</tr>
				</thead>
				<?php
				while($row =$Result->fetch_array()) {	    
				   ?>
				   <tbody class = "relleno">
				   <tr>
				   <td> <?php printf($row["id_promocion"]); ?>   </td>
				   <td> <?php printf($row["nombre"]); ?>   </td>
				   <td> <?php printf("$".$row["precio"].".00"); ?>   </td>
				   <td> <?php printf($row["id_producto"]); ?>   </td>
				   </tr>
				   </tbody>
				</center>
		<?php	
			}
		}
		?>
		</table>
				<br><a href="administrar_promociones.php">Volver</a>
		
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