<?php
    // Iniciar sesión
    session_start();

    // Verificar que esta declarada la sesión y que su estado es autenticado.
    if (isset($_SESSION["l_usuario"]) and $_SESSION["estado"] == "Autenticado") {
        
        $iniciar = '';
      
    } else {
        
        $iniciar = '<div class="row" id="login">
                        <div class="row" id="login-content">
                            <!-- User -->
                            <div class="col-xs-12 col-md-12 col-xl-4">
                                <p>
                                    <input type="text" class="form-control" id="user" name="user" placeholder="Usuario">
                                </p> 
                            </div>

                            <!-- Password -->
                            <div class="col-xs-12 col-md-12 col-xl-4">
                                <p>
                                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                                </p> 
                            </div>
                            <!-- Botones iniciar sesión y registrarse -->
                            <div class="col-xs-12 col-md-12 col-xl-4">
                                <div class="row">
                                    <p class="col-xs-12 col-md-4 col-xl-6">
                                        <button type="button" class="btn" id="signin">INICIAR SESIÓN</button>
                                    </p> 

                                    <p class="col-xs-12 col-md-4 col-xl-6">
                                         <button type="button" class="btn" id="signup" onclick="location.href=\'temp-registration.php\'">REGISTRARSE</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>'; 
        
    }
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
         <!-- Javascript -->
         <script type="text/javascript" src="../../js/validar-signin.js"></script>
         <script type="text/javascript" src="../../js/busqueda.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <!-- Llamada a archivos -->
        <?php include 'temp-header.php'; ?>
        <?php echo $iniciar; ?>
        <?php include 'temp-search.php'; ?>
        <?php include 'temp-welcome.php'; ?>
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

