<?php

require_once 'cliente.php';

// Enviados a través de Ajax
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

// Creación del objeto y almacenamiento en una variable
$user = new Cliente();

// Ejecutar el método de la clase
$register = $user->mod_info($nombre, $apellidos, $telefono, $email, $usuario, $pais, $ciudad, $direccion, $numero, $postal);

// Mensajes de error
if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}

