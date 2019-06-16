<?php

require_once 'cliente.php';

// Enviados a través de Ajax
$cli = $_POST['cli_id'];
$veh = $_POST['veh_id'];
$fecha_en = $_POST['en_fecha'];
$fecha_de = $_POST['en_hora'];
$hora1_en = $_POST['de_fecha'];
$hora2_de = $_POST['de_hora'];

// Creación del objeto y almacenamiento en una variable
$user = new Cliente();

// Ejecutar el método de la clase
$register = $user->reservar($cli, $veh, $fecha_en, $hora1_en, $fecha_de, $hora2_de);

// Redirigir a la página de inicio
header("Location: ../templates/temp-index.php");

