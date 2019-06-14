function enviar(id) {
    var clienteid = $("#cliente_id" + id).val();
    
    var datos = {
        "idcli" : clienteid
    };
    
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
    })
}

