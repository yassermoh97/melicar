<div>
    <!-- Llamada a archivos -->
    <?php include 'temp-header.php'; ?>

    <?php
        session_start();
    ?>

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

    <?php include 'temp-footer.php'; ?>
</div>
