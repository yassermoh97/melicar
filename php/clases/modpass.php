<?php

require_once 'cliente.php';

// Enviados a través de Ajax
$us = $_POST['m_usuario'];
$pass1 = md5($_POST['m_pass']);

// Creación del objeto y almacenamiento en una variable
$user = new Cliente();

// Ejecutar el método de la clase
$register = $user->mod_pass($us, $pass1);

// Mensajes de error
if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
