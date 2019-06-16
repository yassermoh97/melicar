$(document).ready(function() {
  
    function nom() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       var bool_nombre = false;
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_nombre").val().match(exp)) {
           $("#mostrar_nombre").text("");
           bool_nombre = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_nombre").val().match(exp)) {
           $("#mostrar_nombre").text("Debe ser un valor alfabético");
           bool_nombre = false;
       }
       return bool_nombre;
    }
    
    function ape() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       var bool_apellidos = false;
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_apellidos").val().match(exp)) {
           $("#mostrar_apellidos").text("");
           bool_apellidos= true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_apellidos").val().match(exp)) {
           $("#mostrar_apellidos").text("Debe ser un valor alfabético");
           bool_apellidos = false;
       }
       return bool_apellidos;
    }
    
    function tel() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       var bool_telefono = false;
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_telefono").val().match(exp)) {
           $("#mostrar_telefono").text("");
           bool_telefono = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_telefono").val().match(exp)) {
           $("#mostrar_telefono").text("No cumple las condiciones (999999999)");
           bool_telefono = false;
       }
       return bool_telefono;
    }
    
    function email() {
       // Declaración de expresión regular
       var exp = /^\w+[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
       var bool_email = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_email").val().match(exp)) {
           $("#mostrar_email").text("");
           bool_email = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_email").val().match(exp)) {
           $("#mostrar_email").text("No cumple las condiciones (aaaaa@aaa.aa)");
           bool_email = false;
       }
       return bool_email;
    }
    
    
    function pais() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       var bool_pais = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_pais").val().match(exp)) {
           $("#mostrar_pais").text("");
           bool_pais = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_pais").val().match(exp)) {
           $("#mostrar_pais").text("Debe ser un valor alfabético");
           bool_pais = false;
       }
       return bool_pais;
    }
    
    function ciu() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       var bool_ciudad = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_ciudad").val().match(exp)) {
           $("#mostrar_ciudad").text("");
           bool_ciudad = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_ciudad").val().match(exp)) {
           $("#mostrar_ciudad").text("Debe ser un valor alfabético");
           bool_ciudad = false;
       }
       return bool_ciudad;
    }
    
    function dir() {
       // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       var bool_direccion = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_calle").val().match(exp)) {
           $("#mostrar_calle").text("");
           bool_direccion = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_calle").val().match(exp)) {
           $("#mostrar_calle").text("Debe ser un valor alfabético");
           bool_direccion = false;
       }
       return bool_direccion;
    }
    
    function num() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       var bool_numero = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_numero").val().match(exp)) {
           $("#mostrar_numero").text("");
           bool_numero = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_numero").val().match(exp)) {
           $("#mostrar_numero").text("Debe ser un valor numérico");
           bool_numero = false;
       }
       return bool_numero;
    }
    
    
    function post() {
       // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       var bool_postal = false;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_postal").val().match(exp)) {
           $("#mostrar_postal").text("");
           bool_postal = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_postal").val().match(exp)) {
           $("#mostrar_postal").text("Debe ser un valor numérico");
           bool_postal = false;
       }
       return bool_postal;
    }
    
    $("#btn-modif1").click(function() {
        nom();
        ape();
        email();
        tel();
        pais();
        ciu();
        dir();
        num();
        post();
        
        console.log(nom());
        console.log(ape());
        console.log(email());
        console.log(tel());
        console.log(pais());
        console.log(ciu());
        console.log(dir());
        console.log(num());
        console.log(post());
        
        if (nom() && ape() && tel() && email() && pais() && ciu() && dir() && num() &&  post()) {
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
        }
    });       
});


