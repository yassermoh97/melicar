<?php
    // Iniciar sesión
    session_start();

    // Verificar que esta declarada la sesión y que su estado es autenticado.
    if (isset($_SESSION["l_usuario"]) and $_SESSION["estado"] == "Autenticado") {
        
        $cerrarsesion = '<li class="nav-item">
                            <button type="button" id="cerrarsesion" onclick="location.href=\'../clases/logout.php\'">CERRAR SESIÓN</button>
                        </li>';
        $tuperfil = '<li class="nav-item">
                        <button type="button" class="bt-perfil" role="link" onclick="window.location=\'temp-perfil.php\'">
                                TU PERFIL<span><img src="../../images/logo-user.svg" id="logo-user"></span>
                        </button>
                    </li>';
        if ($_SESSION["l_usuario"] == "admin") {
             $tuperfil = '<li class="nav-item">
                        <button type="button" class="bt-perfil" role="link" onclick="window.location=\'temp-adperfil.php\'">
                                TU PERFIL<span><img src="../../images/logo-user.svg" id="logo-user"></span>
                        </button>
                    </li>';
        }
        
    } else {
        
        $cerrarsesion = '';
        $tuperfil = '<li class="nav-item">
                        <button type="button" class="bt-perfil" data-toggle="modal" data-target="#miModal">
                                TU PERFIL<span><img src="../../images/logo-user.svg" id="logo-user"></span>
                        </button>
                    </li>';
        
    }
?>
<header>
    <div>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-sm navbar-default">
            <!-- Brand -->
            <a class="navbar-brand" href="temp-index.php"><img src="../../images/logo.png" id="logotipo"></a>
            
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <img src="../../images/menu-icon.png" id="menu-icon">
            </button>
            
            <!-- Links and Dropdown -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbardrop1" data-toggle="dropdown">
                            COCHES Y FURGONETAS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="temp-cars.php">NUESTROS COCHES<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                            <hr><a class="dropdown-item" href="temp-van.php">NUESTRAS FURGONETAS<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="temp-valoraciones.php" id="navbardrop3">
                            VALORAR
                        </a>
                    </li>
                </ul>

                <!-- Link perfil -->
                <div class="nav navbar-nav ml-auto" id="tuperfil">
                    <ul class="navbar-nav">
                        <?php echo $tuperfil; ?>
                        <?php echo $cerrarsesion; ?>
                    </ul>
                </div> 
            </div>
        </nav>   
    </div>
</header>

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="myModalLabel">Para acceder a tu perfil, primero debes iniciar sesión.</h5>
            </div>
        </div>
    </div>
</div>
