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

        public function reg_cliente($nombre, $apellidos, $telefono, $email, $usuario, $pass , $pais, $ciudad, $direccion, $numero, $puerta, $postal) {
            $sql = "SELECT * FROM clientes WHERE usuario_cli = '$usuario'";

            # Comprobar si el usuario ya está registrado
            $check =  $this->db->query($sql);
            $count_row = $check->num_rows;
            
            # Si el usuario no está insertado en la tabla, se registrará
            if ($count_row == 0) {
                $sql1 = "INSERT INTO clientes (nombre_cli, apellido_cli, telefono_cli, correo_cli, usuario_cli, contrasena_cli, pais_cli, ciudad_cli, calle_cli, numero_cli, puerta_cli, codigo_postal_cli) VALUES (\"$nombre\", \"$apellidos\", \"$telefono\", \"$email\", \"$usuario\", \"$pass\", \"$pais\", \"$ciudad\", \"$direccion\", \"$numero\", \"$puerta\", \"$postal\")";
                $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");     
                return $result;
            } 

            else {
                return false;
            }
        }   
    }