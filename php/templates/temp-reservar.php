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
            
            
            if (isset($_POST['btn-reservar'])) {
                $nom_cli = $_SESSION['l_usuario'];
                $id_cars = $_POST['idveh'];
                $fe1 = $_POST['fecha_en']; 
                $fe2 = $_POST['fecha_de'];
                $ho1 = $_POST['hora_en'];
                $ho2 = $_POST['hora_de'];
                
                // Consulta a la base de datos
                $consulta_clientes = "SELECT * FROM clientes WHERE usuario_cli = '$nom_cli'";
                $consulta_cliente =  $conn->query($consulta_clientes);
                $cliente = mysqli_fetch_array($consulta_cliente);
                $cli_id = $cliente['id_cli'];
                
                $consulta_vehiculos = "SELECT * FROM vehiculos WHERE id_veh = '$id_cars'";
                $consulta_vehiculo =  $conn->query($consulta_vehiculos);
                $coche = mysqli_fetch_array($consulta_vehiculo);
            
        ?>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card" id="reser">
                            <h2 class="titulo-reserva">REALIZAR RESERVA</h2>
                            <h4 class="titulo-reserva">DATOS DEL CLIENTE</h4>
                                <p><strong>Nombre: </strong> <?php echo $cliente['nombre_cli']; ?></p>
                                <p><strong>Apellidos: </strong> <?php echo $cliente['apellido_cli']; ?></p>
                                <p><strong>Teléfono: </strong> <?php echo $cliente['telefono_cli']; ?></p>
                                <p><strong>Email: </strong> <?php echo $cliente['correo_cli']; ?></p>
                                <p><strong>País: </strong> <?php echo $cliente['pais_cli']; ?></p>
                                <p><strong>Ciudad: </strong> <?php echo $cliente['ciudad_cli']; ?></p>
                                <p><strong>Calle: </strong> <?php echo $cliente['calle_cli']; ?></p>
                                <p><strong>Número: </strong><?php echo $cliente['numero_cli']; ?></p>
                                <p><strong>Código postal: </strong><?php echo $cliente['codigo_postal_cli']; ?></p>
                            <h4 class="titulo-reserva">DATOS DE RESERVA</h4>
                                <p><strong>Fecha de recogida:</strong> <?php echo $fe1; ?></p>
                                <p><strong>Hora de recogida: </strong><?php echo $ho1; ?></p>
                                <p><strong>Fecha de devolución: </strong><?php echo $fe2; ?></p>
                                <p><strong>Hora de devolución: </strong><?php echo $ho2; ?></p>
                            <h4 class="titulo-reserva">DETALLES DEL VEHÍCULO</h4>
                                <p><strong>Marca: </strong> <?php echo $coche['marca_veh']; ?></p>
                                <p><strong>Modelo: </strong> <?php echo $coche['modelo_veh']; ?></p>
                                <p><strong>Plazas: </strong> <?php echo $coche['plazas_veh']; ?></p>
                                <p><strong>Maletas: </strong> <?php echo $coche['maletas_veh']; ?></p>
                                <p><strong>Puertas: </strong> <?php echo $coche['puertas_veh']; ?></p>
                                <p><strong>Cambio: </strong> <?php echo $coche['cambio_veh']; ?></p>
                                <p><strong>Combustible: </strong> <?php echo $coche['combustible_veh']; ?></p>
                                <p><strong>Aire acondicionado: </strong> <?php echo $coche['air_veh']; ?></p>
                                
                                <h2 id="price">PRECIO <?php echo $coche['precio_veh']; ?>€ / día</h2>
                        </div>
                <form action="../clases/reserva.php" method="POST">
                    <input type="number" class="ocult"  name="veh_id" id="veh_id" value="<?php echo $id_cars;  ?>">
                    <input type="number" class="ocult"  name="cli_id" id="cli_id" value="<?php echo  $cli_id;   ?>">
                    <input type="text"  class="ocult" name="en_fecha" id="en_fecha" value="<?php echo $fe1;  ?>">
                    <input type="text"  class="ocult" name="en_hora" id="en_hora" value="<?php echo $ho1; ?>">
                    <input type="text"  class="ocult" name="de_fecha" id="de_fecha" value="<?php echo $fe2; ?>">
                    <input type="text"  class="ocult" name="de_hora" id="de_hora" value="<?php echo $ho2; ?>">
                    <input type="submit" class="btn-pagar" value="REALIZAR RESERVA" name="btn-pagar">
                </form>
    <?php
            }
    ?>
        
       
                          
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
