<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Javascript -->
        <script type="text/javascript" src="../../js/eliminar-cliente.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <!-- Archivos incluidos -->
        <?php include 'temp-header.php'; ?>
        
        <!-- Migas de pan -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="temp-adperfil.php">Tu perfil</a></li>
                <li class="breadcrumb-item" aria-current="page">Clientes registrados</li>
            </ol>
        </nav>
        
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
    $consulta_vehiculo = "SELECT * FROM clientes WHERE usuario_cli != 'admin'";
    $consulta_resultado =  $conn->query($consulta_vehiculo);
    
    // Comprobar coincidencias en la consulta
    if ($consulta_resultado->num_rows > 0) {
    ?>
            <div class="col-xs-12 col-md-10 col-xl-10">
                <table class="tabla_vehiculos">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Pais</th>
                        <th>Ciudad</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Código postal</th>
                        <th>Acción</th>
                    </tr>
    <?php
        
        // Almacenar los datos de la consulta en un array asociativo
        while ($row = $consulta_resultado->fetch_assoc()) {
            $id_cliente = $row['id_cli'];
    ?>
                    <tr>
                        <td><?php echo $row['nombre_cli']; ?></td>
                        <td><?php echo $row['apellido_cli']; ?></td>
                        <td><?php echo $row['telefono_cli']; ?></td>
                        <td><?php echo $row['correo_cli']; ?></td>
                        <td><?php echo $row['usuario_cli']; ?></td>
                        <td><?php echo $row['pais_cli']; ?></td>
                        <td><?php echo $row['ciudad_cli']; ?></td>
                        <td><?php echo $row['calle_cli']; ?></td>
                        <td><?php echo $row['numero_cli']; ?></td>
                        <td><?php echo $row['codigo_postal_cli']; ?></td>
                        <input type="text" value="<?php echo $id_cliente; ?>" class="ocult" id="cliente_id<?php echo $id_cliente; ?>">
                        <td class="accion"><button type="button" class="eliminar" onclick="enviar(<?php echo $id_cliente; ?>)">
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
