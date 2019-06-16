<?php
    // Iniciar sesión
    session_start();

    // Verificar que esta declarada la sesión y que su estado es autenticado.
    if (isset($_SESSION["l_usuario"]) and $_SESSION["estado"] == "Autenticado") {
        
        $valorar = '<div class="row">
                    <p class="col-xs-12 col-md-12 col-xl-12">
                        <button type="button" class="btn" id="btn-valorar" onclick="location.href=\'temp-regvaloracion.php\'">VALORAR SERVICIO</button>
                    </p> 
                </div>';
      
    } else {
        
        $valorar = '';
        
    }
    
    $usser = $_SESSION ['l_usuario'];
    
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
    

    // Consulta a la base de datos
    $consulta_clients = "SELECT * FROM clientes WHERE usuario_cli = '$usser'";
    $consulta_client =  $conn->query($consulta_clients);
    $dat = mysqli_fetch_array($consulta_client);

  
    $idcli = $dat['id_cli'];
        
    
?>  
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="../../js/validar-valoracion.js"></script>
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../css/styles.css">
        <title>Melicar</title>
    </head>
    
    <body>
        <?php include 'temp-header.php'; ?>
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card" id="valor">
                    <h5 class="card-title" id="title-registration1">VALORA EL SERVICIO</h5>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_opinion" class="regist-controlopi">Comparte tu opinion*</label><br>
                            <textarea rows="5" cols="73" id="regist_opinion" name="opinion"></textarea>
                            <div class="mensaje" id="mostrar_opinion"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <label for="regist_puntuacion" class="regist-controlopi">Puntuación*</label><br>
                            <select id="puntos" name="puntos">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <div class="mensaje" id="mostrar_puntuacion"></div>
                        </div>
                    </div>
                    <input type="hidden" id="cliid" name="cliid" value="<?php echo $idcli; ?>" class="regist"><br>
                </div>
            </div>
        </div>

        <!-- Regist -->
        <div class="row">
            <p class="col-xs-12 col-md-12 col-xl-12">
                <button type="button" class="btn" id="btn-valor">GUARDAR CAMBIOS</button>
            </p> 
        </div>
        
        
        
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>
