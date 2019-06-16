<div>
    <!-- Llamada a archivos -->
    <?php include 'temp-header.php'; ?>
    
    <!-- Migas de pan -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
            <li class="breadcrumb-item" aria-current="page">Tu perfil</li>
        </ol>
    </nav>

    <?php
        session_start();
    ?>
    
    <!-- Panel de control del usuario -->
    <div class="row">
        <div class="config col-xs-12 col-md-2 col-xl-2">
            <div class="container-config">
                <h2 class="title-config">AJUSTES DE PERFIL</h2>
                <ul class="nav flex-column">
                    <li class="nav-config">
                        <a class="nav-config" href="temp-updateinfo.php">Mi cuenta</a>
                    </li>

                    <li class="nav-config">
                        <a class="nav-config" href="temp-updatepass.php">Modificar contraseña</a>
                    </li>

                    <li class="nav-config">
                        <a class="nav-config" href="temp-reservasreg.php">Reservas</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-xs-12 col-md-10 col-xl-10">
            
        </div>
    </div>
    
    <!-- Llamada a archivos -->
    <?php include 'temp-footer.php'; ?>
</div>
