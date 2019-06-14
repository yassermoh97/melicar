$(document).ready(function() { 
    $("#btn-modif2").click(function() {
        var pass_regist = $("#regist_password1").val();
        var usuario_regist = $("#regist_usuario").val();

        var datos = {
            "m_pass" : pass_regist,
            "m_usuario" : usuario_regist
        };

        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/modpass.php",
            success: function(response) {
                   if (response) {
                        alert("Datos incorrectos");
                   } else { 
                        // Redirigir a temp-index.php
                        window.location.replace("temp-updatepass.php");   
                   }
               }
        });
    });       
});
