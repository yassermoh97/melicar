<?php

    class Cliente {
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

        public function reg_cliente($nombre, $apellidos, $telefono, $email, $usuario, $pass, $pais, $ciudad, $direccion, $numero, $postal) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$usuario'";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            
            // Contador de repetición de filas
            $count_row = $check->num_rows;
            
            // Comprobación de coincidencia
            if ($count_row == 0) {
                // Almacenamiento de consulta en una variable
                $sql1 = "INSERT INTO clientes (nombre_cli, apellido_cli, telefono_cli, correo_cli, usuario_cli, contrasena_cli, pais_cli, ciudad_cli, calle_cli, numero_cli, codigo_postal_cli) VALUES (\"$nombre\", \"$apellidos\", \"$telefono\", \"$email\", \"$usuario\", \"$pass\", \"$pais\", \"$ciudad\", \"$direccion\", \"$numero\", \"$postal\")";
                // Realización de query
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
        
        public function mod_info($nombre, $apellidos, $telefono, $email, $usuario, $pais, $ciudad, $direccion, $numero, $postal) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$usuario'";

            $check =  $this->db->query($sql);
            // Contador de repetición de filas
            $count_row = $check->num_rows;
            
            // Almacenamiento de consulta en una variable
            $sql1 = "UPDATE clientes SET nombre_cli='$nombre', apellido_cli='$apellidos', telefono_cli='$telefono', correo_cli='$email', usuario_cli='$usuario', pais_cli='$pais', ciudad_cli='$ciudad', calle_cli='$direccion', numero_cli='$numero', codigo_postal_cli='$postal' WHERE usuario_cli='$usuario'";
            // Realización de query
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
            return $result;
        }
        
        public function mod_pass($us, $pass1) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$us'";

            $check =  $this->db->query($sql);
            // Contador de repetición de filas
            $count_row = $check->num_rows;
            
            // Almacenamiento de consulta en una variable
            $sql1 = "UPDATE clientes SET contrasena_cli='$pass1' WHERE usuario_cli='$us'";
            // Realización de query
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
            return $result;
        }
        
        
        public function reservar($cli, $veh, $fecha_en, $hora1_en, $fecha_de, $hora2_de) {
            // Almacenamiento de consulta en una variable
            $sql1 = "INSERT INTO reserva (id_cli, id_veh, fecha_entrega, hora_entrega, fecha_devolucion, hora_devolucion) VALUES ($cli, $veh, \"$fecha_en\", \"$hora1_en\", \"$fecha_de\", \"$hora2_de\")";
            $sql2 = "UPDATE vehiculos SET estado_veh='alquilado' WHERE id_veh=$veh";
            
            // Realización de query
            $result1 = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");  
            $result2 = mysqli_query($this->db,$sql2) or die(mysqli_connect_errno()."Data cannot inserted"); 
            return $result1;
        }
        
        public function valorar($cli, $opinion, $puntuacion) {
            // Almacenamiento de consulta en una variable
            $sql1 = "INSERT INTO valoraciones (id_cli, opinion_val, puntuacion_val) VALUES ($cli, \"$opinion\", \"$puntuacion\")";
            
            // Realización de query  
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted"); 
            return $result;
        }
        
        public function elim_reserva($id) {
            // Almacenamiento de consulta en una variable
            $sql = "SELECT * FROM reserva WHERE id_res='$id'";
            $check =  $this->db->query($sql);
            
            // Contador de repetición de filas
            $count_row = $check->num_rows;

            // Comprobación de coincidencia
            if ($count_row == 1) {
                // Almacenamiento de consulta en una variable
                $sql1 = "DELETE FROM reserva WHERE id_res='$id'";
                // Realización de query
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
    }