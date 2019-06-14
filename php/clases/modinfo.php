<?php

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$nombre = $_POST['m_nombre'];
$apellidos = $_POST['m_apellidos'];
$telefono = $_POST['m_telefono'];
$email = $_POST['m_email'];
$usuario = $_POST['m_usuario'];
$pais = $_POST['m_pais'];
$ciudad = $_POST['m_ciudad'];
$direccion = $_POST['m_direccion'];
$numero = $_POST['m_numero'];
$postal = $_POST['m_codigo_postal'];

$user = new Cliente();
$register = $user->mod_info($nombre, $apellidos, $telefono, $email, $usuario, $pais, $ciudad, $direccion, $numero, $postal);


if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}

