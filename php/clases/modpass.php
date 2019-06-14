<?php

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$us = $_POST['m_usuario'];
$pass1 = md5($_POST['m_pass']);

$user = new Cliente();
$register = $user->mod_pass($us, $pass1);


if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}
