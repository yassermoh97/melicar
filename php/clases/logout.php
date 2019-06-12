<?php

// Iniciar sesión
session_start();

// Desconfigurar sesión
unset($_SESSION);

// Destruir todas las sesión
session_destroy();

// Redirigir a index.php
header("Location: ../templates/temp-index.php");

die();

