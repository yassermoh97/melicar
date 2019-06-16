$(document).ready(function() {
    $("#btn-valor").click(function() {
        var opinion_regist = $("#opinion").val(); 
        var puntos_regist = $("#puntos").val();
        var client_regist = $("#cliid").val();
        
        var datos = {
            "opi" : opinion_regist,
            "punt" : puntos_regist,
            "cli" : client_regist
        };
        
        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/valorar.php",
            success: function(response) {
                        if (!response) {
                                // Redirigir a temp-index.php
                                window.location.replace("temp-valoraciones.php");
                        } else {
                                
                        }
                    }
        });
    });
});
