<?php
session_start();

if(isset($_SESSION['persona'])){
    
    if($_SESSION['persona'][0]==1){
        $nombre_admi = $_SESSION['persona'][1];
        include_once("menu_admi.html");
    
?>
<center><br><br>
<h1 style = 'color = #fff'>Bienvenido jefe: <?php echo $nombre_admi;?></h1>
<h2 style = 'color = #fff'>Ubicaci&oacute;n del negocio PieDeMolcajete</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.4631304699558!2d-96.92540632121505!3d18.890352197147955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e55e5ae96307%3A0x3770a6ad968e6949!2sAvenida%2010%202310A%2C%20Miguel%20Hidalgo%20y%20Costilla%2C%2094630%20C%C3%B3rdoba%2C%20Ver.!5e0!3m2!1ses-419!2smx!4v1620369372435!5m2!1ses-419!2smx" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</center>
<?php
        }else{
            header('Location: menu_cliente.php');
            exit();
        }
        
    }else {
        header('Location: Iniciar/formulario_iniciar_sesion.php');
        exit();
    }
?>