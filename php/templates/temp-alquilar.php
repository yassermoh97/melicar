<?php
    session_start();
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
       
        <?php include 'temp-header.php'; ?>
        
           
        
<?php
    $servername = "localhost";
    $username = "yasser";
    $password = "bentley97";
    $db_name = "melicar";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $db_name);

    // Comprobar conexión
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if (isset($_POST['search-btn'])) {
        
        $fecha1 = $_POST['option-date1'];
        $fecha2 = $_POST['option-date2'];
        $hora1 = $_POST['option-time1'];
        $hora2 = $_POST['option-time2'];
        
        // Consulta a la base de datos
        $consulta_reserva = "SELECT * FROM vehiculos WHERE estado_veh = 'disponible'";
        $consulta_resultado1 =  $conn->query($consulta_reserva);
        $cont1 = $consulta_resultado1->num_rows;
        
        if (($cont1 > 0)) {
            while ($row = $consulta_resultado1->fetch_assoc()) {
                $imagen = str_replace("C:fakepath", "", $row['imagen_veh']);
                $idve = $row['id_veh'];
?>
                <div class="row cars">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-7">
                                    <img src="../../images/cars/<?php echo $imagen; ?>" class="car-imagen">
                                </div>

                                <div class="col-xs-12 col-md-12 col-xl-5">
                                    <div class="car-info">
                                        <form action="temp-reservar.php" method="POST">
                                            <h5 class="tipo"><?php echo $row['tipo_veh'];?></h5>
                                            <h4 class="title-car"><?php echo $row['marca_veh'] . " " . $row['modelo_veh']; ?></h4>
                                            <h6></h6>
                                            <p class="info"></p>
                                            <div class="info-accesories">
                                                <img src="../../images/cars/plazas.png" id="image-plazas"><span><?php echo $row['plazas_veh']; ?> Plazas</span>
                                                <img src="../../images/cars/maleta.png" id="image-maletas"><span><?php echo $row['maletas_veh']; ?> Maleta</span>
                                                <img src="../../images/cars/puertas.png" id="image-puertas"><span><?php echo $row['puertas_veh']; ?> Puertas</span><br>

                                                <img src="../../images/cars/cambio.png" id="image-cambio"><span><?php echo $row['cambio_veh']; ?></span>
                                                <img src="../../images/cars/combustible.png" id="image-combustible"><span><?php echo $row['combustible_veh']; ?></span>
                                                <img src="../../images/cars/air-acon.png" id="image-air"><span><?php echo $row['air_veh']; ?></span>
                                            </div>
                                            <input type="text" class="ocult"  id="idveh<?php echo $row['id_veh']; ?>" name="idveh" value="<?php echo $row['id_veh']; ?>">
                                            <input type="text"  class="ocult" name="fecha_en" value="<?php echo $fecha1; ?>">
                                            <input type="text"  class="ocult" name="fecha_de" value="<?php echo $fecha2; ?>">
                                            <h2 class="precio-alquiler"><?php echo $row['precio_veh']; ?>€ / día</h2>
                                            <input type="text"  class="ocult" name="hora_en" value="<?php echo $hora1; ?>">
                                            <input type="text"  class="ocult" name="hora_de" value="<?php echo $hora2; ?>">
                                            <input type="submit" class="alquilar-btn" name="btn-reservar" value="RESERVAR">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div> 
                </div>
                
<?php 
            }
        } else {
            
             
        }
?>
                 
        
<?php                  
    }
            
         
        //} 
?> 
        
        <div id="separador">
            <p></p>
        </div>                    
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
