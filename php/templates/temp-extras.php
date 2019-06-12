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
                <h5>EXTRAS</h5>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6">
                <div class="card" id="sillitas">
                    <div>
                        <h4 class="card-title" id="titulo-silla">La seguridad, nuestra prioridad</h4>
                        <img id="imagen-extra1" src="../../images/silla.jpg">
                        <p class="card-body" id="parrafo1">Melicar ofrece un servicio pensado especialmente para la seguridad de los más pequeños.
                        Añade la sillita que necesites en el proceso de reserva.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-md-6 col-xl-6">
                <div class="card" id="conductor">
                    <div>
                        <h4 class="card-title" id="titulo-conductor">Deja que otro lleve el volante</h4>
                        <img id="imagen-extra2" src="../../images/conductor.jpg">
                        <p class="card-body" id="parrafo2">Nuestro servicio de coche con conductor es fiable, funciona 
                            las 24 horas del día. Este servicio pone a tu disposición conductores 
                            profesionales y sedanes de primera gama (y relucientemente nuevos).</p>
                    </div>
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
