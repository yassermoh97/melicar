<?php

require_once 'cliente.php';

// Enviados a través de Ajax
$cli = $_POST['cli'];
$opinion= $_POST['opi'];
$puntuacion = $_POST['punt'];

// Creación del objeto y almacenamiento en una variable
$user = new Cliente();

// Ejecutar el método de la clase
$register = $user->valorar($cli, $opinion, $puntuacion);

// Mensajes de error
if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}


