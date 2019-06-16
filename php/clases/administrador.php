<?php

    class Administrador {
        // Declaración de variables
        public $db;
        public $servername;
        public $username;
        public $password;
        public $db_name;
        
        // Conexión a la base de datos
        function __construct() {
            $servername = "localhost";
            $username = "yasser";
            $password = "bentley97";
            $db_name = "melicar";
            
            // Almacenamiento de la conexión en una variable (creación de objeto)
            $this->db = new mysqli($servername, $username, $password, $db_name);
            if(mysqli_connect_errno()) {

                echo "Error: Could not connect to database.";

            }
        }
        
        // Método de registro de vehículo
        public function reg_vehiculo($tipo, $marca, $modelo, $plazas, $maletas, $puertas, $cambio, $air, $combustible, $precio, $imagen) {
            // Almacenamiento de consulta en una variable
            $sql1 = "INSERT INTO vehiculos (tipo_veh, marca_veh, modelo_veh, plazas_veh, maletas_veh, puertas_veh, cambio_veh, air_veh, combustible_veh, precio_veh, imagen_veh, estado_veh) VALUES (\"$tipo\", \"$marca\", \"$modelo\", $plazas, $maletas, $puertas, \"$cambio\", \"$air\", \"$combustible\", $precio, \"$imagen\", \"disponible\")";
            
            // Realización de query
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
            return $result;
        }
        
        // Método para eliminar un vehículo a través de su id
        public function elim_vehiculo($id) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM vehiculos WHERE id_veh='$id'";
            $check =  $this->db->query($sql);
            
            // Contador de repetición de filas
            $count_row = $check->num_rows;
            
            // Comprobación de coincidencia
            if ($count_row == 1) {
                // Almacenamiento de consulta en una variable
                $sql1 = "DELETE FROM vehiculos WHERE id_veh='$id'";
                // Realización de query
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
        
        // Método para la eliminación de un cliente a través de su id
        public function elim_cliente($id) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM clientes WHERE id_cli='$id'";
            $check =  $this->db->query($sql);
            
            // Contador de repetición de filas
            $count_row = $check->num_rows;

            // Comprobación de coincidencia
            if ($count_row == 1) {
                // Almacenamiento de consulta en una variable
                $sql1 = "DELETE FROM clientes WHERE id_cli='$id'";
                
                // Realización de query
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
    }
