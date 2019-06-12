<?php
    session_start();
?>
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
    
    <body>
       <?php include 'temp-header.php'; ?>
        
        <div>
            <div class="card" id="title-coberturas">
                <h5>COBERTURAS</h5>
            </div>
        </div>
        
        <div class="card" id="coberturas">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-xl-4" id="basica">
                    <h6 class="title-cobertura">Básica</h6>
                    <p class="info-cobertura">Protección de daño al vehículo por colisión</p>
                    <p class="info-cobertura">Protección contra robo del vehículo</p>
                </div>

                <div class="col-xs-12 col-md-4 col-xl-4"id="media">
                    <h6 class="title-cobertura">Media</h6>
                    <p class="info-cobertura">Protección de daño al vehículo por colisión</p>
                    <p class="info-cobertura">Protección contra robo del vehículo</p>
                    <p class="ampliación">+</p>
                    <p class="info-cobertura">Protección de lunas, ópticas y neumáticos</p>
                    <p class="info-cobertura">Protección personal de accidentes mejorada 
                        (conductor y ocupantes)*</p>
                </div>

                <div class="col-xs-12 col-md-4 col-xl-4" id="premium">
                    <h6 class="title-cobertura">Premium</h6>
                    <p class="info-cobertura">Protección de daño al vehículo por colisión</p>
                    <p class="info-cobertura">Protección contra robo del vehículo</p>
                    <p class="ampliación">+</p>
                    <p class="info-cobertura">Protección de lunas, ópticas y neumáticos</p>
                    <p class="info-cobertura">Protección personal de accidentes mejorada 
                        (conductor y ocupantes)* y daños/pérdidas en equipajes/efectos personales</p>
                </div>
            </div>
        </div>
        
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

