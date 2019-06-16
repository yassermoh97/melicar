<?php

require_once 'administrador.php';

// Enviados a través de Ajax
$id = $_POST['idveh'];

// Creación del objeto y almacenamiento en una variable
$car1 = new Administrador();

// Ejecutar el método de la clase
$register = $car1->elim_vehiculo($id);

// Mensajes de error
if (!($car1 == false)) {
  
    
} else {
    
    echo "Error en el registro";
    

}