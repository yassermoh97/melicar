$(document).ready(function() {
    $("#btn_pagar").click(function() {
        var cli = $("#cli_id").val();
        var veh = $("#veh_id").val();
        var feee = $("#en_fecha").val();
        var hooo = $("#en_hora").val();
        var feeee = $("#de_fecha").val();
        var heeee = $("#de_hora").val();
        
        console.log(cli);
        console.log(veh);
        console.log(feee);
        console.log(heee);
        console.log(feeee);
        console.log(heeee);
        
        var datos = {
            "cl" : cli,
            "ve" : veh,
            "fe" : feee,
            "ho" : heee,
            "fee" : feeee,
            "hoo" : heeee
        };
        
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

