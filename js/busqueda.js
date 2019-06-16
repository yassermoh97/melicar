$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>JQUERY VACIO1</p>');  
});

function buscar() {
    var textoBusqueda = $("#prueba").val();
    
    if (textoBusqueda !== "") {
        $.ajax({
            data: textoBusqueda,
            type: "POST",
            url: "../templates/temp-alquilar.php"
        });
    } else {
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
    }
};