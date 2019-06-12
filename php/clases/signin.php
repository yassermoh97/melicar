<?php
$servername = "localhost";
$username = "yasser";
$password = "bentley97";
$db_name = "melicar";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $db_name);

// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Datos recogidos del formulario de inicio de sesión
$user_login = $_POST["l_usuario"];
$pass_login = md5($_POST["l_pass"]);

// Consulta a la base de datos
$consulta_login = "SELECT * FROM clientes WHERE usuario_cli = '$user_login' AND contrasena_cli = '$pass_login'";

$consulta_resultado = mysqli_query($conn, $consulta_login);

$datos = mysqli_fetch_array($consulta_resultado);


// Creación de variables con los datos de la base de datos
$dbuser = $datos["usuario_cli"];
$dbpass = $datos["contrasena_cli"];


// Comprobar si los campos recogidos son iguales que los de la base de datos 
if ($user_login == $dbuser and $pass_login == $dbpass) {
    
    session_start();
    $_SESSION["l_usuario"] = $dbuser;
    $_SESSION["estado"] = "Autenticado";
    

// En caso de no ser así no realiza la sesión	
} else {
    
    echo "Los datos son incorrectos";
    
}

mysqli_close($conn);


