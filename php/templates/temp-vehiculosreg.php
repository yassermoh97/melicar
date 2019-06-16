<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Javascript -->
        <script type="text/javascript" src="../../js/eliminar-vehiculo.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <!-- Llamada a archivos -->
        <?php include 'temp-header.php'; ?>
        
        <?php
            session_start();
        ?>
        
        <div class="row">
            <div class="config col-xs-12 col-md-2 col-xl-2">
                <div class="container-config">
                    <h4 class="title-config">ADMINISTRAR</h4>
                    <ul class="nav flex-column">
                        <li class="nav-config">
                            <a class="nav-config" href="temp-clientesreg.php">Clientes registrados</a>
                        </li>
                        <li class="nav-config">
                            <a class="nav-config" href="temp-vehiculosreg.php">Vehículos registrados</a>
                        </li>
                        <li class="nav-config">
                            <a class="nav-config" href="temp-regvehiculos.php">Registrar vehículo</a>
                        </li>
                    </ul>
                </div>
            </div>
            

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

    // Consulta a la base de datos
    $consulta_vehiculo = "SELECT * FROM vehiculos";
    $consulta_resultado =  $conn->query($consulta_vehiculo);
    
    if ($consulta_resultado->num_rows > 0) {
    ?>
            <div class="col-xs-12 col-md-10 col-xl-10">
                <table class="tabla_vehiculos">
                    <tr>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Plazas</th>
                        <th>Maletas</th>
                        <th>Puertas</th>
                        <th>Cambio</th>
                        <th>Aire acondicionado</th>
                        <th>Combustible</th>
                        <th>Precio/día</th>
                        <th>Acción</th>
                    </tr>
    <?php
        while ($row = $consulta_resultado->fetch_assoc()) {
            $id_vehiculo = $row['id_veh'];
    ?>
                    <tr>
                        <td><?php echo $row['tipo_veh']; ?></td>
                        <td><?php echo $row['marca_veh']; ?></td>
                        <td><?php echo $row['modelo_veh']; ?></td>
                        <td><?php echo $row['plazas_veh']; ?></td>
                        <td><?php echo $row['maletas_veh']; ?></td>
                        <td><?php echo $row['puertas_veh']; ?></td>
                        <td><?php echo $row['cambio_veh']; ?></td>
                        <td><?php echo $row['air_veh']; ?></td>
                        <td><?php echo $row['combustible_veh']; ?></td>
                        <td><?php echo $row['precio_veh']."€"; ?></td>
                        <input type="text" value="<?php echo $id_vehiculo; ?>" class="ocult" id="vehiculo_id<?php echo $id_vehiculo; ?>">
                        <td class="accion"><button type="button" class="eliminar" onclick="enviar(<?php echo $id_vehiculo; ?>)">
                        ELIMINAR
                        </button></td> 
                    </tr>
                    
<?php   }   ?>
                </table>              
           </div>
<?php    } ?>
        </div>
        
         <!-- Llamada a archivos -->
        <?php include 'temp-footer.php'; ?>
         
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
