<?php
session_start();
include ("Iniciar/con_db.php");
?>
	<title>Consultar empleados</title>
	<link rel="stylesheet" href="css/adm_css.css">
<?php
if(isset($_SESSION['persona'])){
	if($_SESSION['persona'][0]==1){
		$Query = "select * from empleado, persona where empleado.id_persona = persona.id_persona ";
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
   <h1>Consulta de empleados</h1>
   
       <table class = "tabla">
		   <thead class = "titulos">
        <tr>
		<td><strong> id_empleado</strong></td>
		<td><strong> Nombre</strong></td>
		<td><strong> Apellido</strong></td>
		<td><strong> Celular</strong></td>
		<td><strong> Email</strong></td>
		<td><strong> Cargo</strong></td>
		<td><strong> Sueldo</strong></td>
		</tr>
		</thead>
		<?php
        while($row =$Result->fetch_array()) {	    
           ?>
		   <tbody class = "relleno">
		   <tr>
		   <td> <?php printf($row["id_empleado"]); ?>   </td>
		   <td> <?php printf($row["nombre"]); ?>   </td>
		   <td> <?php printf($row["apellido"]); ?>   </td>
		   <td> <?php printf($row["celular"]); ?>   </td>
		   <td> <?php printf($row["email"]); ?>   </td>
		   <td> <?php printf($row["cargo"]); ?>   </td>
		   <td> <?php printf("$".$row["sueldo"].".00"); ?>   </td>
           </tr>
		   </tbody>
		</center>
<?php	
	}
}
?>
</table>
		<br><a href="administrar_empleados.php">Volver</a>
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