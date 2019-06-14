<?php

    class Administrador {

        public $db;
        public $servername;
        public $username;
        public $password;
        public $db_name;

        function __construct() {
            $servername = "localhost";
            $username = "yasser";
            $password = "bentley97";
            $db_name = "melicar";

            $this->db = new mysqli($servername, $username, $password, $db_name);
            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";

            }
        }

        public function reg_vehiculo($tipo, $marca, $modelo, $plazas, $maletas, $puertas, $cambio, $air, $combustible, $precio, $imagen) {
            $sql = "SELECT * FROM vehiculos WHERE";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;

            # Si el usuario no está insertado en la tabla, se registrará
            if ($count_row == 0) {
                $sql1 = "INSERT INTO vehiculos (tipo_veh, marca_veh, modelo_veh, plazas_veh, maletas_veh, puertas_veh, cambio_veh, air_veh, combustible_veh, precio_veh, imagen_veh) VALUES (\"$tipo\", \"$marca\", \"$modelo\", \"$plazas\", \"$maletas\", \"$puertas\", \"$cambio\", \"$air\", \"$combustible\", \"$precio\", \"$imagen\")";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
        
        public function elim_vehiculo($id) {
            $sql = "SELECT * FROM vehiculos WHERE id_veh='$id'";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;

            # Si el usuario no está insertado en la tabla, se registrará
            if ($count_row == 1) {
                $sql1 = "DELETE FROM vehiculos WHERE id_veh='$id'";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
        
        public function elim_cliente($id) {
            $sql = "SELECT * FROM clientes WHERE id_cli='$id'";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;

            # Si el usuario no está insertado en la tabla, se registrará
            if ($count_row == 1) {
                $sql1 = "DELETE FROM clientes WHERE id_cli='$id'";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
    }
