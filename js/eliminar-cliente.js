// Función para enviar el id del cliente que queremos eliminar a eliminarcli.php
function enviar(id) {
    // Recolección del dato a través de su id
    var clienteid = $("#cliente_id" + id).val();
    
    // Almacenamiento de dato en una variable
    var datos = {
        "idcli" : clienteid
    };
    
    // Llamada a Ajax
    $.ajax({
        data: datos,
        type: "POST",
        url: "../clases/eliminarcli.php",
        success: function(response) {
            if (response) {
                
            } else {
                alert("Has eliminado a un cliente del registro");
                window.location.replace("temp-clientesreg.php");
            }
        }
    });
}

