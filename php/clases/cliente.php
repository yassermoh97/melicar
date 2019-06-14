<?php

    class Cliente {

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

        public function reg_cliente($nombre, $apellidos, $telefono, $email, $usuario, $pass, $pais, $ciudad, $direccion, $numero, $postal) {
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$usuario'";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;
            
            # Si el usuario no está insertado en la tabla, se registrará
            if ($count_row == 0) {
                $sql1 = "INSERT INTO clientes (nombre_cli, apellido_cli, telefono_cli, correo_cli, usuario_cli, contrasena_cli, pais_cli, ciudad_cli, calle_cli, numero_cli, codigo_postal_cli) VALUES (\"$nombre\", \"$apellidos\", \"$telefono\", \"$email\", \"$usuario\", \"$pass\", \"$pais\", \"$ciudad\", \"$direccion\", \"$numero\", \"$postal\")";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }
        
        public function mod_info($nombre, $apellidos, $telefono, $email, $usuario, $pais, $ciudad, $direccion, $numero, $postal) {
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$usuario'";

            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;
            
            $sql1 = "UPDATE clientes SET nombre_cli='$nombre', apellido_cli='$apellidos', telefono_cli='$telefono', correo_cli='$email', usuario_cli='$usuario', pais_cli='$pais', ciudad_cli='$ciudad', calle_cli='$direccion', numero_cli='$numero', codigo_postal_cli='$postal' WHERE usuario_cli='$usuario'";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
            return $result;
        }
        
        public function mod_pass($us, $pass1) {
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$us'";

            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;
            
            $sql1 = "UPDATE clientes SET contrasena_cli='$pass1' WHERE usuario_cli='$us'";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
            return $result;
        }
    }