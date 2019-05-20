<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
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
                            <label for="regist-nombre" class="regist-control">Nombre*</label><br>
                            <input type="text" id="regist-nombre" class="regist" name="regist-nombre">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-apellidos" class="regist-control">Apellidos*</label><br>
                            <input type="text" id="regist-apellidos" class="regist" name="regist-apellidos">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-telefono" class="regist-control">Número de teléfono*</label><br>
                            <input type="text" id="regist-telefono" class="regist" name="regist-telefono">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-email" class="regist-control">Dirección de correo electrónico*</label><br>
                            <input type="text" id="regist-email" class="regist" name="regist-email">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for=" regist-usuario" class="regist-control">Nombre de usuario*</label><br>
                            <input type="text" id="regist-usuario" class="regist" name="regist-usuario">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-password1" class="regist-control">Contraseña*</label><br>
                            <input type="password" id="regist-password1" class="regist" name="regist-password1">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-password2" class="regist-control">Confirmar contraseña*</label><br>
                            <input type="password" id="regist-password2" class="regist" name="regist-password2">
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
                            <label for="regist-pais" class="regist-control">País*</label><br>
                            <input type="text" id="regist-pais" class="regist" name="regist-pais">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-ciudad" class="regist-control">Ciudad*</label><br>
                            <input type="text" id="regist-ciudad" class="regist" name="regist-ciudad">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-calle" class="regist-control">Dirección*</label><br>
                            <input type="text" id="regist-calle" class="regist" name="regist-calle">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-numero" class="regist-control">Número*</label><br>
                            <input type="text" id="regist-numero" class="regist" name="regist-numero">
                        </div>
                    </div>
                    
                    
                    <div class="row">  
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-puerta" class="regist-control">Puerta</label><br>
                            <input type="text" id="regist-puerta" class="regist" name="regist-puerta">
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist-postal" class="regist-control">Código postal*</label><br>
                            <input type="text" id="regist-postal" class="regist" name="regist-postal">
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
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
