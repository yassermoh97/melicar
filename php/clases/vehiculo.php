<?php
    require_once 'administrador.php';
    
    function sanitize($str) {
        $str= str_replace("&", "&amp", $str);
        $str= str_replace("\"", "&quot", $str);
        $str= str_replace("'", "&apos", $str);
        $str= str_replace(">", "&gt", $str);
        $str= str_replace("<", "&lt", $str);
        $str= str_replace("€", "&amp", $str);
        return $str;
    }
    # Datos recogidos del formulario de registro de vehiculos
    $tipo = $_POST["r_tipo"];
    $marca = $_POST["r_marca"];
    $modelo = $_POST["r_modelo"];
    $plazas = $_POST["r_plazas"];
    $maletas = $_POST["r_maletas"];
    $puertas = $_POST["r_puertas"];
    $cambio = $_POST["r_cambio"];
    $air = $_POST["r_air"];
    $combustible = $_POST["r_combustible"];
    $precio = $_POST["r_precio"];
    $img = $_POST["r_imagen"];
    
    $imagen = sanitize($img);
    
    

    $car = new Administrador();
    $register = $car->reg_vehiculo($tipo, $marca, $modelo, $plazas, $maletas, $puertas, $cambio, $air, $combustible, $precio, $imagen);


    if (!($car == false)) {


    } else {

        echo "Error en el registro";

    }

