// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    // Ejecutar código cuando se haya pulsado el botón "signin"
    $("#signin").click(function() {
        // Recolección de datos a través del id
        var usuario_login = $("#user").val(); 
        var pass_login = $("#pass").val();
        
        // Almacenamiento en una variable los datos recogidos
        var datos = {
            "l_usuario" : usuario_login,
            "l_pass" : pass_login
        };
        
        // Llamada a Ajax
        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/signin.php",
            success: function(response) {
                        if (!response) {
                                // Redirigir a temp-index.php
                                window.location.replace("temp-index.php");
                        } else {
                                alert("Datos incorrectos");
                        }
                    }
        });
    });
});