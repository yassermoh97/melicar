$(document).ready(function() { 
    $("#btn-modif1").click(function() {
        var nombre_regist = $("#regist_nombre").val();
        var apellidos_regist = $("#regist_apellidos").val();
        var telefono_regist = $("#regist_telefono").val();
        var email_regist = $("#regist_email").val();
        var usuario_regist = $("#regist_usuario").val();
        var pais_regist = $("#regist_pais").val();
        var ciudad_regist = $("#regist_ciudad").val();
        var direccion_regist = $("#regist_calle").val();
        var numero_regist = $("#regist_numero").val();
        var postal_regist = $("#regist_postal").val();

        var datos = {
            "m_nombre" : nombre_regist,
            "m_apellidos" : apellidos_regist,
            "m_telefono" : telefono_regist,
            "m_email" : email_regist,
            "m_usuario" : usuario_regist,
            "m_pais" : pais_regist,
            "m_ciudad" : ciudad_regist,
            "m_direccion" : direccion_regist,
            "m_numero" : numero_regist,
            "m_codigo_postal" : postal_regist
        };

        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/modinfo.php",
            success: function(response) {
                   if (response) {
                        alert("Datos incorrectos");
                   } else { 
                        // Redirigir a temp-index.php
                        window.location.replace("temp-updateinfo.php");   
                   }
               }
        });
    });       
});


