<div>
    <!-- Archivos incluidos -->
    <?php include 'temp-header.php'; ?>
    
    <!-- Migas de pan -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="temp-index.php">Inicio</a></li>
            <li class="breadcrumb-item" aria-current="page">Tu perfil</a></li>
        </ol>
    </nav>
    
    <?php
        session_start();
    ?>
    
    <!-- Panel de control del administrador -->
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

        <div class="col-xs-12 col-md-10 col-xl-10">
            
        </div>
    </div>
    <!-- Archivos incluidos -->
    <?php include 'temp-footer.php'; ?>
</div> 
