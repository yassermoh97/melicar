<?php
    // Iniciar sesión
    session_start();

    // Verificar que esta declarada la sesión y que su estado es autenticado.
    if (isset($_SESSION["l_usuario"]) and $_SESSION["estado"] == "Autenticado") {
        
        // Botón en caso de que esté inciada la sesión
        $valorar = '<div class="row">
                    <p class="col-xs-12 col-md-12 col-xl-12">
                        <button type="button" class="btn" id="btn-valorar" onclick="location.href=\'temp-regvaloracion.php\'">VALORAR SERVICIO</button>
                    </p> 
                </div>';
      
    } else {
        
        // Botón en caso de que no esté iniciada la sesión
        $valorar = '';
        
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
                <li class="breadcrumb-item" aria-current="page">Valorar</li>
            </ol>
        </nav>
        
        <!-- Botón declarado en el script superior -->
        <?php echo $valorar; ?>
        
        <!-- Filtro de resultados -->
        <div id="filtro2"> 
            <form action="temp-valoraciones.php" method="POST">
                <select id="filtrar2" name="filtrar2">
                    <option value="0"></option>
                    <option value="2">Fecha: Valoraciones antiguas</option>
                    <option value="1">Fecha: Valoraciones recientes</option>
                </select>
                <input type="submit" id="filt2" name="filt2" value="FILTRAR">
            </form>
        </div>
        
<?php
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
    
    if (!isset($_POST['filtrar2'])) {

        // Consulta a la base de datos
        $consulta_valoracion = "SELECT * FROM clientes, valoraciones WHERE clientes.id_cli = valoraciones.id_cli;";
     
    } else {
        if ($_POST['filtrar2'] == 0) {
            // Almacenamiento de consulta en una variable
            $consulta_valoracion = "SELECT * FROM clientes, valoraciones WHERE clientes.id_cli = valoraciones.id_cli;";
        }
        if ($_POST['filtrar2'] == 1) {
            // Almacenamiento de consulta en una variable
            $consulta_valoracion = "SELECT * FROM clientes, valoraciones WHERE clientes.id_cli = valoraciones.id_cli ORDER BY fecha_valoracion DESC;";
        }
        if ($_POST['filtrar2'] == 2) {
            // Almacenamiento de consulta en una variable
            $consulta_valoracion = "SELECT * FROM clientes, valoraciones WHERE clientes.id_cli = valoraciones.id_cli ORDER BY fecha_valoracion ASC;";
        }
    }
    
    
    // Consulta a la base de datos
    $consulta_resultado =  $conn->query($consulta_valoracion);
    
    // Contador de coincidencia en filas
    $cont1 = $consulta_resultado->num_rows;

    // Comprobación de coincidencias
    if (($cont1 > 0)) {
        
        // Almacenamiento de resultados en array asociativo
        while ($row = $consulta_resultado->fetch_assoc()) {
            
?>

            <div class="row">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <div class="card valoracion">
                        <div class="row">
                            <div class="col-xs-3 col-md-3 col-xl-3 primero">
                                <p id="fecha"><strong>Fecha de publicación: </strong><?php echo $row['fecha_valoracion']; ?></p>
                                <img class="image-user" src="../../images/logo-negro.svg">
                                <p id="cli"><strong>Usuario:</strong> <?php echo $row['usuario_cli']; ?></p>
                            </div>
                            <div class="col-xs-6 col-md-6 col-xl-6 segundo">
                                <p class="valoracio"><strong>Opinión:</strong> <?php echo $row['opinion_val']; ?></p>
                            </div>
                            <div class="col-xs-3 col-md-3 col-xl-3 tercero">
                                <p><strong>Valoración</strong></p>
                                <h1 class="notaval"><?php echo $row['puntuacion_val']; ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
        }

    }
    
?>       

        <div id="separador">
            <p></p>
        </div> 
        
        <!-- Archivos inluidos -->
        <?php include 'temp-footer.php'; ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

