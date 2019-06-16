<html>
    <head>
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
        <nav aria-label="breadcrumb" class="migas">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
                <li class="breadcrumb-item" aria-current="page">Mapa del sitio</li>
            </ol>
        </nav>
        
        <div id="sitemap">
            <h1>Mapa del Sitio</h1>
            <p>Puedes encontrar todas las páginas en este sitio</p>
            <ul id="site">
                <li class="enlaces_prin"><a href="temp-index.php">Logotipo</a></li>
                <li>Coches y furgonetas</li>
                <ul>
                    <li><a href="temp-cars.php">Nuestros coches</a></li>
                    <li><a href="temp-van.php">Nuestras furgonetas</a></li>
                </ul>
                <li class="enlaces_prin"><a href="temp-valoraciones.php">Valorar</a></li>
                <li class="enlaces_prin"><a href="#">Tu perfil</a></li>
            </ul>
        </div>
        
        <!-- Archivos inluidos -->
        <?php include 'temp-footer.php'; ?>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

