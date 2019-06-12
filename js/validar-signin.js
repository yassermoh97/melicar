$(document).ready(function() {
    $("#signin").click(function() {
        var usuario_login = $("#user").val(); 
        var pass_login = $("#pass").val();
        
        var datos = {
            "l_usuario" : usuario_login,
            "l_pass" : pass_login
        };
        
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