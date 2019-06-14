function enviar(id) {
    var vehiculoid = $("#vehiculo_id" + id).val();
    
    var datos = {
        "idveh" : vehiculoid
    };
    
    $.ajax({
        data: datos,
        type: "POST",
        url: "../clases/eliminarveh.php",
        success: function(response) {
            if (!response) {
                
            } else {
                alert("Has eliminado un vehículo del registro");
                window.location.replace("temp-vehiculosreg.php")
            }
        }
    })
}


