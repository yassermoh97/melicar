// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    var bool_tipo = false;
    var bool_marca = false;
    var bool_modelo = false;
    var bool_plazas = false;
    var bool_maletas = false;
    var bool_pruertas = false;
    var bool_cambio = false;
    var bool_air = false;
    var bool_combustible = false;
    var bool_precio = false;
    
     // Ejecuta cuando el campo pierde el foco
    $("#regist_tipo").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_tipo").val().match(exp)) {
           $("#mostrar_tipo").text("");
           bool_tipo = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_tipo").val().match(exp)) {
           $("#mostrar_tipo").text("Debe ser un valor alfabético");
           bool_tipo = false;
       }
    });
    
     // Ejecuta cuando el campo pierde el foco
    $("#regist_marca").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_marca").val().match(exp)) {
           $("#mostrar_marca").text("");
           bool_marca = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_marca").val().match(exp)) {
           $("#mostrar_marca").text("Debe ser un valor alfabético");
           bool_marca = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_modelo").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_modelo").val().match(exp)) {
           $("#mostrar_modelo").text("");
           bool_modelo = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_modelo").val().match(exp)) {
           $("#mostrar_modelo").text("Debe ser un valor alfabético");
           bool_modelo = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_plazas").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_plazas").val().match(exp)) {
           $("#mostrar_plazas").text("");
           bool_plazas = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_plazas").val().match(exp)) {
           $("#mostrar_plazas").text("Debe ser un valor numérico");
           bool_plazas = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_maletas").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_maletas").val().match(exp)) {
           $("#mostrar_maletas").text("");
           bool_maletas = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_maletas").val().match(exp)) {
           $("#mostrar_maletas").text("Debe ser un valor numérico");
           bool_maletas = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_puertas").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_puertas").val().match(exp)) {
           $("#mostrar_puertas").text("");
           bool_puertas = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_puertas").val().match(exp)) {
           $("#mostrar_puertas").text("Debe ser un valor numérico");
           bool_puertas = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_cambio").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_cambio").val().match(exp)) {
           $("#mostrar_cambio").text("");
           bool_cambio = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_cambio").val().match(exp)) {
           $("#mostrar_cambio").text("Debe ser un valor alfabético");
           bool_cambio = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_air").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_air").val().match(exp)) {
           $("#mostrar_air").text("");
           bool_air = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_air").val().match(exp)) {
           $("#mostrar_air").text("Debe ser un valor alfabético");
           bool_air = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_combustible").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_combustible").val().match(exp)) {
           $("#mostrar_combustible").text("");
           bool_combustible = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_combustible").val().match(exp)) {
           $("#mostrar_combustible").text("Debe ser un valor alfabético");
           bool_combustible = false;
       }
    });
    
    // Ejecuta cuando el campo pierde el foco
    $("#regist_precio").focusout(function() {
        // Declaración de expresión regular
       var exp = /^[0-9]+$/;
       
       // Comprobar si el campo cumple la expresión regular
       if ($("#regist_precio").val().match(exp)) {
           $("#mostrar_precio").text("");
           bool_precio = true;
       // En caso de no cumplir la expresión, mostrar el siguiente mensaje de error
       } else if (!$("#regist_precio").val().match(exp)) {
           $("#mostrar_precio").text("Debe ser un valor numérico");
           bool_precio = false;
       }
    });
    
    
    
    // Ejecutar código cuando el botón "btn-regveh" sea pulsado
    $("#btn-regveh").click(function() {
        
        // Ejecutar si se cumplen todas las condiciones de validación
        if (bool_tipo && bool_marca && bool_modelo && bool_plazas && bool_maletas && bool_puertas && bool_cambio && bool_air && bool_combustible && bool_precio) {
            // Recolección de datos a través del id
            var tipo_regist = $("#regist_tipo").val(); 
            var marca_regist = $("#regist_marca").val();
            var modelo_regist = $("#regist_modelo").val();
            var plazas_regist = $("#regist_plazas").val();
            var maletas_regist = $("#regist_maletas").val();
            var puertas_regist = $("#regist_puertas").val();
            var cambio_regist = $("#regist_cambio").val();
            var air_regist = $("#regist_air").val();
            var combustible_regist = $("#regist_combustible").val();
            var precio_regist = $("#regist_precio").val();
            var imagen_regist = $("#regist_imagen").val();

            // Pruebas por consola
            console.log(tipo_regist);
            console.log(marca_regist);
            console.log(modelo_regist);
            console.log(plazas_regist);
            console.log(maletas_regist);
            console.log(puertas_regist);
            console.log(cambio_regist);
            console.log(air_regist);
            console.log(combustible_regist);
            console.log(precio_regist);
            console.log(imagen_regist);


            var datos = {
                "r_tipo" : tipo_regist,
                "r_marca" : marca_regist,
                "r_modelo" : modelo_regist,
                "r_plazas" : plazas_regist,
                "r_maletas" : maletas_regist,
                "r_puertas" : puertas_regist,
                "r_cambio" : cambio_regist,
                "r_air" : air_regist,
                "r_combustible" : combustible_regist,
                "r_precio" : precio_regist,
                "r_imagen" : imagen_regist
            };

            // Llamada a Ajax
            $.ajax({
                data: datos,
                type: "POST",
                url: "../clases/vehiculo.php",
                success: function(response) {
                            if (!response) {
                                    // Redirigir a temp-regvehiculos.php
                                    window.location.replace("temp-regvehiculos.php");
                            } else {
                                    alert("Error al registrar un nuevo vehículo");
                            }
                        }
            });
        }
    });
});

