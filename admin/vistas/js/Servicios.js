$(".TB").on("click", ".EditarServicio", function() {
    var ServId = $(this).attr("ServId");
    var datos = new FormData();
    datos.append("ServId", ServId);

    $.ajax({
        url: "Ajax/serviciosA.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#Servicioid").val(respuesta["id"]);
            $("#iconoE").val(respuesta["catservicono"]);
            $("#titularE").val(respuesta["catservtitulo"]);
            $("#descripcionE").val(respuesta["catservdescripcion"]);
        }
    })
})

// borrar Servicios de la base de datos
$(".TB").on("click", ".BorrarServicios", function() {
    var Cod = $(this).attr("ServId");
    window.location = "index.php?ruta=nosotros&ServId=" + Cod;
})