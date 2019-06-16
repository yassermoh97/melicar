<?php

require_once 'administrador.php';

// Enviados a través de Ajax
$id = $_POST['idcli'];

// Creación del objeto y almacenamiento en una variable
$cli= new Administrador();

// Ejecutar el método de la clase
$register = $cli->elim_cliente($id);

// Mensajes de error 
if (!($cli == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
