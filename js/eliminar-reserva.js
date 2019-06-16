function envio(id) {
    var reservaid = $("#reservaid" + id).val();
    
    var datos = {
        "idres" : reservaid
    };
    
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
