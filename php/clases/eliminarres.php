<?php

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$id = $_POST['idres'];


$cli= new Cliente();
$register = $cli->elim_reserva($id);


if (!($cli == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
