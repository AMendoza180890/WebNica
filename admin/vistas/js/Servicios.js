// codigo en la aplicacion local
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
            $("#iconoE").val(respuesta["CatServIcono"]);
            $("#titularE").val(respuesta["CatServTitulo"]);
            $("#descripcionE").val(respuesta["CatServDescripcion"]);
        }
    })
})

// borrar Servicios de la base de datos
$(".TB").on("click", ".BorrarServicios", function() {
    var Cod = $(this).attr("ServId");
    window.location = "index.php?ruta=Servicios&ServId=" + Cod;
})