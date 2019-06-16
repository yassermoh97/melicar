// Ejecutar el código una vez esté cargada la página
$(document).ready(function() {
    // Ejecutar código cuando se haya pulsado el botón "btn-pagar"
    $("#btn_pagar").click(function() {
        // Recolección de datos a través del id
        var cli = $("#cli_id").val();
        var veh = $("#veh_id").val();
        var feee = $("#en_fecha").val();
        var hooo = $("#en_hora").val();
        var feeee = $("#de_fecha").val();
        var heeee = $("#de_hora").val();
        
        // Pruebas por consola
        console.log(cli);
        console.log(veh);
        console.log(feee);
        console.log(hooo);
        console.log(feeee);
        console.log(heeee);
        
        // Almacenamiento en una variable los datos recogidos
        var datos = {
            "cl" : cli,
            "ve" : veh,
            "fe" : feee,
            "ho" : hooo,
            "fee" : feeee,
            "hoo" : heeee
        };
        
        // Llamada a Ajax
        $.ajax({
            data: datos,
            type: "POST",
            url: "../clases/reserva.php",
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

