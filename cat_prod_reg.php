<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente no registrado</title>
    <link rel="stylesheet" href="css/estilos.css?v=<?php echo time();?>">
</head>
<body>
    <h2 class="section_titulo">NUESTROS PRODUCTOS</h2>
    <main class="main">    
            <?php
                include("Iniciar/con_db.php");
                $Query = "Select * from producto";
                $Result = mysqli_query($conex,$Query);
                if($Result->num_rows > 0){
                    while($row = mysqli_fetch_array($Result)){
                        ?>
                        <center>
                        <div class="contenedor">
                        <section class="info">
                        <article class="info_columna">
                        <img src="<?php echo $row["image_url"];?>" alt="" class="info__img">
                        <h2 class="info_titulo"><?php echo $row["nombre"];?><br><br>
                        Precio: $<?php echo $row["precio"]; ?>.00</h2>
                        <p class="info__txt"><?php echo $row["descripcion"]; ?></p>
                        <?php
                        if($row["existencias"]>0){
                            ?>
                            <form action="agregar_carrito.php" method="post">
                            <input type="hidden" value = "<?php echo $row["id_producto"];?>" name="id_p"/>
                            <input type="submit" value = "Agregar a carrito">
                            </form> 
                            <?php
                        }else 
                        ?>
                        
                           
                    </article>
                    </section>
                    </div>
                    </center>
                         <?php
                    }
                }else{
                    echo "<center><h1>No hay productos</h1></center>";
                }
            ?>
             <p id="ancla"><h2 class="section_titulo">NUESTRAS PROMOCIONES</h2></p>
            <?php
            $Query = "SELECT * FROM promociones";
            $Result = mysqli_query($conex,$Query);
            if($Result->num_rows > 0){
                while($row = mysqli_fetch_array($Result)){
                    ?>
                    <div class="contenedor">
                    <section class="cursos">
                    <div class="cursos_columna">
                    <img src="<?php echo $row["image_url"];?>" alt="" class="cursos_img">
                    <div class="cursos_descripcion">
                    <h3 class="cursos_titulo"><?php echo $row[1];?></h3>
                    <h2 class="info_titulo">$<?php echo $row[2];?>.00</h2>
                    <p class="cursos_txt" id="prr"><?php echo $row[3]; ?></p>
                </div>
            </div>
        </section>
    </div>
                    <?php
                }
            }else echo "<center><h1>No hay promociones</h1></center>";
                
            ?>
</main>
</body>
</html>
