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
        <!-- Archivos incluidos -->
       <?php include 'temp-header.php'; ?>
        
        <!-- Migas de pan -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page">Nuestras furgonetas</li>
            </ol>
        </nav>
        <div class="info-group">
            <div class="card" id="group-e">
                <h5 class="title-group">FURGONETAS</h5>
            </div>
        </div>
        
        <div class="row cars">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/MercedesCitan.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo F - Frugoneta pequeña</h4>
                                <h6>Mercedes Citan o similar</h6>
                                <p class="info">La compacta, refinada y robusta Mercedes Citan, provee de una conducción de alta calidad y 
                                    mucho espacio en cualquiera de sus versiones</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 3 Plazas</span>
                                    <img src="../../images/cars/maleta.png" id="image-maletas"><span> 4 Maleta</span>
                                    <img src="../../images/cars/puertas.png" id="image-puertas"><span> 5 Puertas</span><br>
                                    
                                    <img src="../../images/cars/cambio.png" id="image-cambio"><span> Manual</span>
                                    <img src="../../images/cars/combustible.png" id="image-combustible"><span> Mixto</span>
                                    <img src="../../images/cars/air-acon.png" id="image-air"><span> Si</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div> 
        </div>
        
        <div class="row cars" id="car-final2">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/MercedesVito.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo G - Furgoneta grande</h4>
                                <h6>Mercedes-Benz Vito o similar</h6>
                                <p class="info">La variedad de prestaciones de la Mercedes-Benz Vito es muy amplia gracias a su fantástica 
                                    capacidad de carga con 6.2 m³ y el bajo nivel de ruido en cabina.</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 4 Plazas</span>
                                    <img src="../../images/cars/maleta.png" id="image-maletas"><span> 2 Maleta</span>
                                    <img src="../../images/cars/puertas.png" id="image-puertas"><span> 5 Puertas</span><br>
                                    
                                    <img src="../../images/cars/cambio.png" id="image-cambio"><span> Manual</span>
                                    <img src="../../images/cars/combustible.png" id="image-combustible"><span> Mixto</span>
                                    <img src="../../images/cars/air-acon.png" id="image-air"><span> Si</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>    
            </div> 
        </div>
        
        <!-- Archivos incluidos -->
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>


