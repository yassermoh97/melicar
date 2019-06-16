<?php

// Iniciar sesión
session_start();

// Desconfigurar sesión
unset($_SESSION);

// Destruir todas las sesión
session_destroy();

// Redirigir a la página de inicio
header("Location: ../templates/temp-index.php");

die();

