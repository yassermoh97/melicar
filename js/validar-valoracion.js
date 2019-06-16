// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    function textarea() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_opinion").val().match(exp)) {
           $("#mostrar_opinion").text("");
           bool_opinion = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_opinion").val().match(exp)) {
           $("#mostrar_opinion").text("Debe ser un valor alfabético");
           bool_opinion = false;
       }
       return bool_opinion;
    }
    
    
    
    $("#btn-valor").click(function() {
        // Llamada a la función
        textarea();
        
        // Pruebas por consola
        console.log(textarea());
        
        // Ejecutar si se cumplen todas las condiciones de validación
        if (textarea()) {
            var opinion_regist = $("#regist_opinion").val(); 
            var puntos_regist = $("#puntos").val();
            var client_regist = $("#cliid").val();
            
            // Recolección de datos a través del id
            var datos = {
                "opi" : opinion_regist,
                "punt" : puntos_regist,
                "cli" : client_regist
            };
            
            // Llamada a Ajax
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
        }
    });
});
