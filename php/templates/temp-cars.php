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
                <li class="breadcrumb-item" aria-current="page">Nuestros coches</li>
            </ol>
        </nav>
        
        <div class="info-group">
            <div class="card" id="group-a">
                <h5 class="title-group">COCHES PEQUEÑOS</h5>
            </div>
        </div>
        
        <div class="row cars">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/Fiat500.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo A - Pequeño 3 puertas</h4>
                                <h6>Fiat 500 o similar</h6>
                                <p class="info">Decántate por un divertido modelo “supermini”, como el elegante Fiat 500, 
                                    perfectos para la gran ciudad.</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 4 Plazas</span>
                                    <img src="../../images/cars/maleta.png" id="image-maletas"><span> 1 Maleta</span>
                                    <img src="../../images/cars/puertas.png" id="image-puertas"><span> 3 Puertas</span><br>
                                    
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
        
        <div class="row cars">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/RenaultClio.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo B - Pequeño 5 puertas</h4>
                                <h6>Renault Clio o similar</h6>
                                <p class="info">Un coche atractivo y compacto, el Renault Clio es ideal para tanto 
                                    centros urbanos como largas distancias.</p>
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
        
        <div class="info-group">
            <div class="card" id="group-b">
                <h5 class="title-group">COCHES MEDIANOS</h5>
            </div>
        </div>
        
        <div class="row cars">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/SeatLeon.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo C - Mediano compacto</h4>
                                <h6>Seat Leon o similar</h6>
                                <p class="info">El Seat León es un compacto con una buena dinámica y un alto rendimiento. 
                                    Una buena opción con todo el espacio que necesitas para disfrutar de la carretera.</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 5 Plazas</span>
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
        
        <div class="info-group">
            <div class="card" id="group-c">
                <h5 class="title-group">COCHES GRANDES</h5>
            </div>
        </div>
        
        <div class="row cars">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/RenaultTalisman.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo D - Grande</h4>
                                <h6>Renault Talisman o similar</h6>
                                <p class="info">El gran portón trasero ayudará a los ocupantes de este coche, con un dinámico diseño 
                                    y cierto toque de deportividad, más comodidad en su día a día.</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 5 Plazas</span>
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
        
        <div class="info-group">
            <div class="card" id="group-d">
                <h5 class="title-group">MONOVOLÚMENES</h5>
            </div>
        </div>
        
        <div class="row cars" id="car-final1">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-7">
                            <img src="../../images/cars/VolkswagenTouran.png" class="car-imagen">
                        </div>
                        
                        <div class="col-xs-12 col-md-12 col-xl-5">
                            <div class="car-info">
                                <h4 class="title-car">Grupo E - Monovolúmen</h4>
                                <h6>Volkswagen Touran (5+2 plazas) o similar</h6>
                                <p class="info">Un coche familiar, versátil y sólido en la carretera. Con hasta 7 plazas de capacidad, el 
                                    Volkswagen Touran posee un ambiente interior redefinido y unas grandes prestaciones.</p>
                                <div class="info-accesories">
                                    <img src="../../images/cars/plazas.png" id="image-plazas"><span> 7 Plazas</span>
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

