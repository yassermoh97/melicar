<header>
    <div>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-sm navbar-default">
            <!-- Brand -->
            <img src="../../images/logo.png" id="logotipo"><a class="navbar-brand" href="#"></a>
            
            <!-- Toggler/collapsibe Button -->
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
                            <a class="dropdown-item" href="#">NUESTROS COCHES<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                            <hr><a class="dropdown-item" href="#">NUESTRAS FURGONETAS<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                            <hr><a class="dropdown-item" href="#">COCHES PRESTIGE<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbardrop2" data-toggle="dropdown">
                            SERVICIOS
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">SERVICIOS<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                            <hr><a class="dropdown-item" href="#">EXTRAS<span><img id="mark-red" src="../../images/mark-red.svg"></span></a>
                        </div>
                    </li>
                </ul>

                <!-- Link perfil -->
                <div class="nav navbar-nav ml-auto" id="tuperfil">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link-perfil" href="#" id="nav-link3">
                                TU PERFIL<span><img src="../../images/logo-user.svg" id="logo-user"></span>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
        </nav>
        
        <!-- Llamada a archivos -->
        <?php include 'temp-login.php'; ?>
        <?php include 'temp-search.php'; ?>
    </div>
</header>
