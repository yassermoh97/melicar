// Función para enviar el id del vehículo que queremos eliminar
function enviar(id) {
    // Recolección de datos a través del id
    var vehiculoid = $("#vehiculo_id" + id).val();
    
    // Almacenamiento en una variable
    var datos = {
        "idveh" : vehiculoid
    };
    
    // Llamada a Ajax
    $.ajax({
        data: datos,
        type: "POST",
        url: "../clases/eliminarveh.php",
        success: function(response) {
            if (!response) {
                alert("Has eliminado un vehículo del registro");
                window.location.replace("temp-vehiculosreg.php");
            } else {
                
            }
        }
    });
}


