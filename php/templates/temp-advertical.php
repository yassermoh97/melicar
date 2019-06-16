<div>
    <?php include 'temp-header.php'; ?>
    
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
                        <a class="nav-config" href="temp-vehiculosreg">Vehículos registrados</a>
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

    <?php include 'temp-footer.php'; ?>
</div> 
