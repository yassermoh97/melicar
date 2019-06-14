<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <!-- Javascript -->
         <script type="text/javascript" src="../../js/validar-updateinfo.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <!-- Llamada a archivos -->
        <?php include 'temp-header.php'; ?>
        
        <?php
            session_start();
            
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
            $us = $_SESSION["l_usuario"];
            // Consulta a la base de datos
            $consulta_login = "SELECT * FROM clientes WHERE usuario_cli = '$us'";
            $consulta_resultado = mysqli_query($conn, $consulta_login);
            $datos = mysqli_fetch_array($consulta_resultado);
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
                            <a class="nav-config" href="#">Reservas</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-md-10 col-xl-10">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card" id="personal">
                            <h5 class="card-title" id="title-registration1">INFORMACIÓN PERSONAL</h5>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_nombre" class="regist-control">Nombre*</label><br>
                                    <input type="text" id="regist_nombre" class="regist" value="<?php echo $datos['nombre_cli']; ?>" name="regist_nombre"><br>
                                    <div class="mensaje" id="mostrar_nombre"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_apellidos" class="regist-control">Apellidos*</label><br>
                                    <input type="text" id="regist_apellidos" class="regist" value="<?php echo $datos['apellido_cli']; ?>" name="regist_apellidos">
                                    <div class="mensaje" id="mostrar_apellidos"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_telefono" class="regist-control">Número de teléfono*</label><br>
                                    <input type="text" id="regist_telefono" class="regist" value="<?php echo $datos['telefono_cli']; ?>" name="regist_telefono">
                                    <div class="mensaje" id="mostrar_telefono"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_email" class="regist-control">Dirección de correo electrónico*</label><br>
                                    <input type="text" id="regist_email" class="regist" value="<?php echo $datos['correo_cli']; ?>" name="regist_email">
                                    <div class="mensaje" id="mostrar_email"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    
                                    <input type="hidden" id="regist_usuario" class="regist" value="<?php echo $datos['usuario_cli']; ?>" name="regist_usuario">
                                    <div class="mensaje" id="mostrar_usuario"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card" id="contacto">
                            <h5 class="card-title" id="title-registration2">DETALLES DE CONTACTO</h5>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_pais" class="regist-control">País*</label><br>
                                    <input type="text" id="regist_pais" class="regist" value="<?php echo $datos['pais_cli']; ?>" name="regist_pais"><br>
                                    <div class="mensaje" id="mostrar_pais"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_ciudad" class="regist-control">Ciudad*</label><br>
                                    <input type="text" id="regist_ciudad" class="regist" value="<?php echo $datos['ciudad_cli']; ?>" name="regist_ciudad"><br>
                                    <div class="mensaje" id="mostrar_ciudad"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_calle" class="regist-control">Dirección*</label><br>
                                    <input type="text" id="regist_calle" class="regist" value="<?php echo $datos['calle_cli']; ?>" name="regist_calle"><br>
                                    <div class="mensaje" id="mostrar_calle"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_numero" class="regist-control">Número*</label><br>
                                    <input type="text" id="regist_numero" class="regist" value="<?php echo $datos['numero_cli']; ?>" name="regist_numero"><br>
                                    <div class="mensaje" id="mostrar_numero"></div>
                                </div>
                            </div>          

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_postal" class="regist-control">Código postal*</label><br>
                                    <input type="text" id="regist_postal" class="regist" value="<?php echo $datos['codigo_postal_cli']; ?>" name="regist_postal"><br>
                                    <div class="mensaje" id="mostrar_postal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regist -->
                <div class="row">
                    <p class="col-xs-12 col-md-12 col-xl-12">
                        <button type="button" class="btn" id="btn-modif1">GUARDAR CAMBIOS</button>
                    </p> 
                </div>
            </div>
        </div>

        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

