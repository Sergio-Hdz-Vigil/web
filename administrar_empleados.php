<?php
session_start();
include("Iniciar/con_db.php");
?>
	<title>Administraci&oacute;n de empleados</title>
	<link rel="stylesheet" href="css/adm_css.css">
<?php
if(isset($_SESSION['persona'])){
	if($_SESSION['persona'][0]==1){

		$Query = "select * from empleado";
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
   <h1>Administraci&oacute;n de empleados</h1>
   
       <table class = "tabla">
		   <thead class = "titulos">
        <tr>
		<td><strong> id_empleado</strong></td>
		<td><strong> Cargo</strong></td>
		<td><strong> Sueldo</strong></td>
		<td><strong> id_persona</strong></td>
		</tr>
		</thead>
		<?php
        while($row =$Result->fetch_array()) {	    
           ?>
		   <tbody class = "relleno">
		   <tr>
		   <td> <?php printf($row["id_empleado"]); ?>   </td>
		   <td> <?php printf($row["cargo"]); ?>   </td>
		   <td> <?php printf($row["sueldo"]); ?>   </td>
		   <td> <?php printf($row["id_persona"]); ?>   </td>
           </tr>
		   </tbody>
		</center>
<?php	
	}
}
?>
</table>
		<br><a href="registrar_empleado.php">Registro de empleados</a>
		<a href="consultar_empleados.php">Consultar empleados</a>
		<a href="eliminar_empleados.php">Eliminar empleados</a>
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