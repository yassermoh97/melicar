<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Javascript -->
        <script type="text/javascript" src="../../js/validar-vehiculo.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <!-- Archivos inluidos -->
        <?php include 'temp-header.php'; ?>
        
        <!-- Migas de pan -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="temp-adperfil.php">Tu perfil</a></li>
                <li class="breadcrumb-item" aria-current="page">Registrar vehículo</li>
            </ol>
        </nav>
        
        <?php
            session_start();
        ?>
        
        <div class="row">
            <div class="config col-xs-12 col-md-2 col-xl-2">
                <div class="container-config">
                    <h4 class="title-config">ADMINISTRAR</h4>
                    <ul class="nav flex-column">
                        <li class="nav-config">
                            <a class="nav-config" href="temp-clientesreg.php">Clientes registrados</a>
                        </li>
                        <li class="nav-config">
                            <a class="nav-config" href="temp-vehiculosreg.php">Vehículos registrados</a>
                        </li>
                        <li class="nav-config">
                            <a class="nav-config" href="temp-regvehiculos.php">Registrar vehículo</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Formulario de registro de vehículos -->
            <div class="col-xs-12 col-md-10 col-xl-10">
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card" id="personal">
                            <h5 class="card-title" id="title-registration1">NUEVO VEHÍCULO</h5>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_tipo" class="regist-control">Tipo*</label><br>
                                    <input type="text" id="regist_tipo" class="regist" name="regist_tipo"><br>
                                    <div class="mensaje" id="mostrar_tipo"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_marca" class="regist-control">Marca*</label><br>
                                    <input type="text" id="regist_marca" class="regist" name="regist_marca">
                                    <div class="mensaje" id="mostrar_marca"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_modelo" class="regist-control">Modelo*</label><br>
                                    <input type="text" id="regist_modelo" class="regist" name="regist_modelo">
                                    <div class="mensaje" id="mostrar_modelo"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_plazas" class="regist-control">Número de plazas*</label><br>
                                    <input type="text" id="regist_plazas" class="regist" name="regist_plazasl">
                                    <div class="mensaje" id="mostrar_plazas"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_maletas" class="regist-control">Número de maletas*</label><br>
                                    <input type="text" id="regist_maletas" class="regist" name="regist_maletas">
                                    <div class="mensaje" id="mostrar_maletas"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_puertas" class="regist-control">Número de puertas*</label><br>
                                    <input type="text" id="regist_puertas" class="regist" name="regist_puertas">
                                    <div class="mensaje" id="mostrar_puertas"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_cambio" class="regist-control">Cambio*</label><br>
                                    <input type="text" id="regist_cambio" class="regist" name="regist_cambio">
                                    <div class="mensaje" id="mostrar_cambio"></div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_air" class="regist-control">Aire acondicionado*</label><br>
                                    <input type="text" id="regist_air" class="regist" name="regist_air">
                                    <div class="mensaje" id="mostrar_air"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_combustible" class="regist-control">Combustible*</label><br>
                                    <input type="text" id="regist_combustible" class="regist" name="regist_combustible">
                                    <div class="mensaje" id="mostrar_combustible"></div>
                                </div>
                            </div>

                             <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_precio" class="regist-control">Precio*</label><br>
                                    <input type="text" id="regist_precio" class="regist" name="regist_precio">
                                    <div class="mensaje" id="mostrar_precio"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <label for="regist_imagen" class="regist-control">Imagen de vehículo*</label><br>
                                    <input type="file" id="regist_imagen" class="regist" name="regist_imagen">
                                    <div class="mensaje" id="mostrar_imagen"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Registrar -->
                    <div class="row">
                        <p class="col-xs-12 col-md-12 col-xl-12">
                            <button type="button" class="btn" id="btn-regveh">REGISTRAR</button>
                        </p> 
                    </div>
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
        
