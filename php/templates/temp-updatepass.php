<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <!-- Javascript -->
         <script type="text/javascript" src="../../js/validar-updatepass.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        
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
            
            // Almacenamiento del nombre de usuario de la sesión que está iniciada
            $us = $_SESSION["l_usuario"];
            
            // Almacenamiento de consulta en una variable
            $consulta_login = "SELECT * FROM clientes WHERE usuario_cli = '$us'";
            
            // Consulta a la base de datos
            $consulta_resultado = mysqli_query($conn, $consulta_login);
            
            // Almacenamiento de resultados en array
            $datos = mysqli_fetch_array($consulta_resultado);
        ?>
        
        <!-- Archivos inluidos -->
        <?php include 'temp-header.php'; ?>
        
        <!-- Migas de pan -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="temp-perfil.php">Tu perfil</a></li>
                <li class="breadcrumb-item" aria-current="page">Modificar contraseña</li>
            </ol>
        </nav>
        
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
            
            <!-- Formulario de modificación de contraseña -->
            <div class="col-xs-12 col-md-10 col-xl-10">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card" id="personal">
                            <h5 class="card-title" id="title-registration1">CONTRASEÑA</h5>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_password1" class="regist-control">Contraseña*</label><br>
                                    <input type="password" id="regist_password1" class="regist" value="<?php echo $datos['contrasena_cli']; ?>" name="regist_password1"><br>
                                    <div class="mensaje" id="mostrar_password1"></div>
                                </div>
                            </div>
                            <input type="hidden" id="regist_usuario" value="<?php echo $datos['usuario_cli']; ?>" class="regist" name="regist_usuario"><br>
                        </div>
                    </div>
                </div>

                <!-- Modificar -->
                <div class="row">
                    <p class="col-xs-12 col-md-12 col-xl-12">
                        <button type="button" class="btn" id="btn-modif2">GUARDAR CAMBIOS</button>
                    </p> 
                </div>
            </div>
        </div>
        
        <!-- Archivos inluidos -->
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
