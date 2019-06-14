$(document).ready(function() {
    $("#btn-regveh").click(function() {
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
        
        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/vehiculo.php",
            success: function(response) {
                        if (!response) {
                                // Redirigir a temp-index.php
                                window.location.replace("temp-regvehiculos.php");
                        } else {
                                alert("Datos incorrectos");
                        }
                    }
        });
    });
});

