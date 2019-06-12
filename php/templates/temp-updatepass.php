<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <!-- Javascript -->
         <script type="text/javascript" src="#"></script>
        
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
                <?php include 'temp-navertical.php'; ?>
            </div>

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

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_password2" class="regist-control">Confirmar contraseña*</label><br>
                                    <input type="password" id="regist_password2" value="<?php echo $datos['contrasena_cli']; ?>" class="regist" name="regist_password2"><br>
                                    <div class="mensaje" id="mostrar_password2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Regist -->
                <div class="row">
                    <p class="col-xs-12 col-md-12 col-xl-12">
                        <button type="button" class="btn" id="btn-modif2">GUARDAR CAMBIOS</button>
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
