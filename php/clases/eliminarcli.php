<?php

require_once 'administrador.php';

# Datos recogidos del formulario de registro
$id = $_POST['idcli'];


$cli= new Administrador();
$register = $cli->elim_cliente($id);


if (!($cli == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
