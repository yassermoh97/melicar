// Función para enviar el id de la reserva que deseamos eliminar
function envio(id) {
    // Recolección de datos a través del id
    var reservaid = $("#reservaid" + id).val();
    
    // Almacenamiento en una variable
    var datos = {
        "idres" : reservaid
    };
    
    // Llamada a Ajax
    $.ajax({
        data: datos,
        type: "POST",
        url: "../clases/eliminarres.php",
        success: function(response) {
            if (response) {
                
            } else {
                alert("Has cancelado una reserva");
                window.location.replace("temp-reservasreg.php");
            }
        }
    });
}
