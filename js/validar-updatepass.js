// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    
    function pass1() {
       // Declaración de expresión regular
       var exp =  /^[A-Z]{1}[a-zA-ZñÑ]+$/;
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_password1").val().match(exp)) {
           $("#mostrar_password1").text("");
           bool_password1 = true;
           
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_password1").val().match(exp)) {
           $("#mostrar_password1").text("Debe empezar por mayúscula");
           bool_password1 = false;
       }
       return bool_password1;
    }
    
    $("#btn-modif2").click(function() {
        // Llama a la función
        pass1();
        
        // Pruebas por consola
        console.log(pass1());
        
        // Ejecutar si se cumplen todas las condiciones de validación
        if (pass1()) {
            var pass_regist = $("#regist_password1").val();
            var usuario_regist = $("#regist_usuario").val();
            
            // Recolección de datos a través del id
            var datos = {
                "m_pass" : pass_regist,
                "m_usuario" : usuario_regist
            };
            
            // Llamada a Ajax
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
        }
    });       
});
