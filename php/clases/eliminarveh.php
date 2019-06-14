<?php

require_once 'administrador.php';

# Datos recogidos del formulario de registro
$id = $_POST['idveh'];


$car1 = new Administrador();
$register = $car1->elim_vehiculo($id);


if (!($car1 == false)) {
  
    
} else {
    
    echo "Error en el registro";
    

}