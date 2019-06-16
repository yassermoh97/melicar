<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Javascript -->
        <script type="text/javascript" src="../../js/eliminar-reserva.js"></script>
        
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
                        <h2 class="title-config">AJUSTES DE PERFIL</h2>
                        <ul class="nav flex-column">
                            <li class="nav-config">
                                <a class="nav-config" href="temp-updateinfo.php">Mi cuenta</a>
                            </li>

                            <li class="nav-config">
                                <a class="nav-config" href="temp-updatepass.php">Modificar contraseña</a>
                            </li>

                            <li class="nav-config">
                                <a class="nav-config" href="temp-reservasreg.php">Reservas</a>
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
    
    
    $uss = $_SESSION['l_usuario'];
    // Consulta a la base de datos
    $consulta_reserva = "SELECT * FROM clientes, reserva WHERE clientes.usuario_cli = '$uss' AND clientes.id_cli = reserva.id_cli";
    $consulta_resultado1 =  $conn->query($consulta_reserva);
    
    
    if ($consulta_resultado1->num_rows > 0) {
        while ($row = $consulta_resultado1->fetch_assoc()) {
            $id_re = $row['id_res'];
    ?>
            
                <div class="col-xs-12 col-md-10 col-xl-10">
                    <table class="tabla_reservas">
                        <tr>
                            <th>Fecha de entrega</th>
                            <th>Hora de entrega</th>
                            <th>Fecha de devolución</th>
                            <th>Hora de devolución</th>
                            <th>Acción</th>
                        </tr>
                        <tr>
                            <td><?php echo $row['fecha_entrega']; ?></td>
                            <td><?php echo $row['hora_entrega']; ?></td>
                            <td><?php echo $row['fecha_devolucion']; ?></td>
                            <td><?php echo $row['hora_devolucion']; ?></td>
                            <input type="text" value="<?php echo $id_re; ?>" class="ocult" id="reservaid<?php echo $id_re; ?>">
            
                            <td class="accion"><button type="button" class="eliminar" onclick="envio(<?php echo $id_re; ?>)">
                            CANCELAR
                            </button></td>                 
                        </tr>            
                    </table>              
                </div>
<?php    
            
        } 
    } else {
?>
            <div class="col-xs-12 col-md-10 col-xl-10">
                <h2 class="titulo-dispo">No hay reservas disponibles</h2>
            </div>
<?php
        }
?>
        </div>
            
        
        
         <!-- Llamada a archivos -->
        <?php include 'temp-footer.php'; ?>
         
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
