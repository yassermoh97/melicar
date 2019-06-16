<?php

require_once 'cliente.php';

// Enviados a través de Ajax
$id = $_POST['idres'];

// Creación del objeto y almacenamiento en una variable
$cli= new Cliente();

// Ejecutar el método de la clase
$register = $cli->elim_reserva($id);

// Mensajes de error
if (!($cli == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
