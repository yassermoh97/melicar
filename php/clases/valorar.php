<?php

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$cli = $_POST['cli'];
$opinion= $_POST['opi'];
$puntuacion = $_POST['punt'];


$user = new Cliente();
$register = $user->valorar($cli, $opinion, $puntuacion);

if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}


