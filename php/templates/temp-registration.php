<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Javascript -->
        <script type="text/javascript" src="../../js/validar-signup.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body id="back-regist">
        <!-- Llamada a archivos -->
        <?php include 'temp-header.php'; ?>
        
        <!-- Container -->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card" id="personal">
                    <h5 class="card-title" id="title-registration1">INFORMACIÓN PERSONAL</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_nombre" class="regist-control">Nombre*</label><br>
                            <input type="text" id="regist_nombre" class="regist" name="regist_nombre"><br>
                            <div class="mensaje" id="mostrar_nombre"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_apellidos" class="regist-control">Apellidos*</label><br>
                            <input type="text" id="regist_apellidos" class="regist" name="regist_apellidos">
                            <div class="mensaje" id="mostrar_apellidos"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_telefono" class="regist-control">Número de teléfono*</label><br>
                            <input type="text" id="regist_telefono" class="regist" name="regist_telefono">
                            <div class="mensaje" id="mostrar_telefono"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_email" class="regist-control">Dirección de correo electrónico*</label><br>
                            <input type="text" id="regist_email" class="regist" name="regist_email">
                            <div class="mensaje" id="mostrar_email"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_usuario" class="regist-control">Nombre de usuario*</label><br>
                            <input type="text" id="regist_usuario" class="regist" name="regist_usuario">
                            <div class="mensaje" id="mostrar_usuario"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_password1" class="regist-control">Contraseña*</label><br>
                            <input type="password" id="regist_password1" class="regist" name="regist_password1"><br>
                            <div class="mensaje" id="mostrar_password1"></div>
                        </div>
                    </div>
                    
                    <!--<div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_password2" class="regist-control">Confirmar contraseña*</label><br>
                            <input type="password" id="regist_password2" class="regist" name="regist_password2"><br>
                            <div class="mensaje" id="mostrar_password2"></div>
                        </div>
                    </div>-->
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
                            <input type="text" id="regist_pais" class="regist" name="regist_pais"><br>
                            <div class="mensaje" id="mostrar_pais"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_ciudad" class="regist-control">Ciudad*</label><br>
                            <input type="text" id="regist_ciudad" class="regist" name="regist_ciudad"><br>
                            <div class="mensaje" id="mostrar_ciudad"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_calle" class="regist-control">Dirección*</label><br>
                            <input type="text" id="regist_calle" class="regist" name="regist_calle"><br>
                            <div class="mensaje" id="mostrar_calle"></div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_numero" class="regist-control">Número*</label><br>
                            <input type="text" id="regist_numero" class="regist" name="regist_numero"><br>
                            <div class="mensaje" id="mostrar_numero"></div>
                        </div>
                    </div>          
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_postal" class="regist-control">Código postal*</label><br>
                            <input type="text" id="regist_postal" class="regist" name="regist_postal"><br>
                            <div class="mensaje" id="mostrar_postal"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Regist -->
        <div class="row">
            <p class="col-xs-12 col-md-12 col-xl-12">
                <button type="button" class="btn" id="btn-regist">REGISTRARSE</button>
            </p> 
        </div>
        
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
