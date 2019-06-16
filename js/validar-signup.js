// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    var bool_nombre = false;
    var bool_apellidos = false;
    var bool_telefono = false;
    var bool_email = false;
    var bool_usuario = false;
    var bool_password1 = false;
    //var bool_password2 = false;
    var bool_pais = false;
    var bool_ciudad = false;
    var bool_direccion = false;
    var bool_numero = false;
    var bool_postal = false;
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_nombre").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_nombre").val().match(exp)) {
           $("#mostrar_nombre").text("");
           bool_nombre = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_nombre").val().match(exp)) {
           $("#mostrar_nombre").text("Debe ser un valor alfabético");
           bool_nombre = false;
       }
    });
    
    $("#regist_apellidos").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_apellidos").val().match(exp)) {
           $("#mostrar_apellidos").text("");
           bool_apellidos= true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_apellidos").val().match(exp)) {
           $("#mostrar_apellidos").text("Debe ser un valor alfabético");
           bool_apellidos = false;
       }
    });
    
    $("#regist_telefono").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_telefono").val().match(exp)) {
           $("#mostrar_telefono").text("");
           bool_telefono = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_telefono").val().match(exp)) {
           $("#mostrar_telefono").text("No cumple las condiciones (999999999)");
           bool_telefono = false;
       } 
    });
    
    $("#regist_email").focusout(function() {
       // Declaración de expresión regular
       var exp = /^\w+[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_email").val().match(exp)) {
           $("#mostrar_email").text("");
           bool_email = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_email").val().match(exp)) {
           $("#mostrar_email").text("No cumple las condiciones (aaaaa@aaa.aa)");
           bool_email = false;
       } 
    });
    
    $("#regist_usuario").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_usuario").val().match(exp)) {
           $("#mostrar_usuario").text("");
           bool_usuario = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_usuario").val().match(exp)) {
           $("#mostrar_usuario").text("Debe ser un valor alfabético");
           bool_usuario = false;
       } 
    });
    
    $("#regist_password1").focusout(function() {
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
    });
    
    
    $("#regist_pais").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_pais").val().match(exp)) {
           $("#mostrar_pais").text("");
           bool_pais = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_pais").val().match(exp)) {
           $("#mostrar_pais").text("Debe ser un valor alfabético");
           bool_pais = false;
       } 
    });
    
    $("#regist_ciudad").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_ciudad").val().match(exp)) {
           $("#mostrar_ciudad").text("");
           bool_ciudad = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_ciudad").val().match(exp)) {
           $("#mostrar_ciudad").text("Debe ser un valor alfabético");
           bool_ciudad = false;
       } 
    });
    
    $("#regist_calle").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_calle").val().match(exp)) {
           $("#mostrar_calle").text("");
           bool_direccion = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_calle").val().match(exp)) {
           $("#mostrar_calle").text("Debe ser un valor alfabético");
           bool_direccion = false;
       } 
    });
    
    $("#regist_numero").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_numero").val().match(exp)) {
           $("#mostrar_numero").text("");
           bool_numero = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_numero").val().match(exp)) {
           $("#mostrar_numero").text("Debe ser un valor numérico");
           bool_numero = false;
       } 
    });
    
    
    $("#regist_postal").focusout(function() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_postal").val().match(exp)) {
           $("#mostrar_postal").text("");
           bool_postal = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_postal").val().match(exp)) {
           $("#mostrar_postal").text("Debe ser un valor numérico");
           bool_postal = false;
       } 
    });

    // Ejecutar código cuando se haya pulsado el botón "btn-regist"
    $("#btn-regist").click(function() {
        // Pruebas por consola
        console.log(bool_nombre);
        console.log(bool_apellidos);
        console.log(bool_email);
        console.log(bool_telefono);
        console.log(bool_email);
        console.log(bool_usuario);
        console.log(bool_password1);
        console.log(bool_pais);
        console.log(bool_ciudad);
        console.log(bool_direccion);
        console.log(bool_numero);
        console.log(bool_postal);
        
        // Ejecutar si se cumplen todas las condiciones de validación
        if (bool_nombre && bool_apellidos && bool_telefono && bool_email && bool_usuario && bool_password1 && bool_pais && bool_ciudad && bool_direccion && bool_numero &&  bool_postal) {
            // Recolección de datos a través del id
            var nombre_regist = $("#regist_nombre").val();
            var apellidos_regist = $("#regist_apellidos").val();
            var telefono_regist = $("#regist_telefono").val();
            var email_regist = $("#regist_email").val();
            var usuario_regist = $("#regist_usuario").val();
            var password_regist = $("#regist_password1").val();
            var pais_regist = $("#regist_pais").val();
            var ciudad_regist = $("#regist_ciudad").val();
            var direccion_regist = $("#regist_calle").val();
            var numero_regist = $("#regist_numero").val();
            var postal_regist = $("#regist_postal").val();

            // Almacenamiento en una variable los datos recogidos
            var datos = {
                "r_nombre" : nombre_regist,
                "r_apellidos" : apellidos_regist,
                "r_telefono" : telefono_regist,
                "r_email" : email_regist,
                "r_usuario" : usuario_regist,
                "r_password" : password_regist,
                "r_pais" : pais_regist,
                "r_ciudad" : ciudad_regist,
                "r_direccion" : direccion_regist,
                "r_numero" : numero_regist,
                "r_codigo_postal" : postal_regist
            };
            
            // Llamada a Ajax
            $.ajax({
                data: datos,
                type: "POST",
                url: "../clases/signup.php",
                success: function(response) {
                       if (response) {
                            alert("Este usuario ya existe");
                       } else { 
                            // Redirigir a temp-index.php
                            window.location.replace("temp-index.php");   
                       }
                   }
            });
        }
    });       
});

