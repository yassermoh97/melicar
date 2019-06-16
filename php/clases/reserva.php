<?php

require_once 'cliente.php';

# Datos recogidos del formulario de registro
$cli = $_POST['cli_id'];
$veh = $_POST['veh_id'];
$fecha_en = $_POST['en_fecha'];
$fecha_de = $_POST['en_hora'];
$hora1_en = $_POST['de_fecha'];
$hora2_de = $_POST['de_hora'];

$user = new Cliente();
$register = $user->reservar($cli, $veh, $fecha_en, $hora1_en, $fecha_de, $hora2_de);

header("Location: ../templates/temp-index.php");

