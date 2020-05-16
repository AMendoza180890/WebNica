// codigo en la aplicacion local
// $(".TB").on("click", ".EditarServicio", function() {
$(".EditarServicio").on("click", function() {

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
            //console.log(respuesta);
            $("#Servicioid").val(respuesta["id"]);
            $("#iconoE").val(respuesta["CatServIcono"]);
            $("#titularE").val(decodeURIComponent(escape(respuesta["CatServTitulo"])));
            $("#descripcionE").val(decodeURIComponent(escape(respuesta["CatServDescripcion"])));
        }
    })
})

// borrar Servicios de la base de datos
$(".TB").on("click", ".BorrarServicios", function() {
    if (confirm("Confirmar para eliminar servicio")) {
        var Cod = $(this).attr("ServId");
        window.location = "index.php?ruta=Servicios&ServId=" + Cod;
    }
})