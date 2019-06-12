<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$nombre = $_POST['r_nombre'];
$apellidos = $_POST['r_apellidos'];
$telefono = $_POST['r_telefono'];
$email = $_POST['r_email'];
$usuario = $_POST['r_usuario'];
$pass = md5($_POST['r_password']);
$pais = $_POST['r_pais'];
$ciudad = $_POST['r_ciudad'];
$direccion = $_POST['r_direccion'];
$numero = $_POST['r_numero'];
$postal = $_POST['r_codigo_postal'];

$user = new Cliente();
$register = $user->reg_cliente($nombre, $apellidos, $telefono, $email, $usuario, $pass, $pais, $ciudad, $direccion, $numero, $postal);


if (!($user == false)) {
  
    
} else {
    
    echo "Error en el registro";
    
}