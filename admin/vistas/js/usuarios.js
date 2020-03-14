$(".TB").on("click", ".BorrarU", function() {
    var CatUsuId = $(this).attr("CatUsuId");
    var CatUsuFoto = $(this).attr("CatUsuFoto");
    window.location = "index.php?ruta=usuarios&CatUsuId=" + CatUsuId + "&CatUsuFoto=" + CatUsuFoto;
})

//llamar datos para actualizar
$(".TB").on("click", ".EditarU", function() {
    var CatUsuId = $(this).attr("CatUsuId");
    var datos = new FormData();
    datos.append("CatUsuId", CatUsuId);

    $.ajax({
        url: "Ajax/usuariosA.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#usuarioE").val(respuesta["CatUsuario"]);
            $("#CatUsuId").val(respuesta["CatUsuId"]);
            $("#claveE").val(respuesta["CatPass"]);

            $("#rolE").html(respuesta["catrolnombre"]);
            $("#rolE").val(respuesta["CatRol"]);

            $("#FotoActual").val(respuesta["CatUsuFoto"]);

            if (respuesta["CatUsuFoto"] != "") {
                $(".visor").attr("src", respuesta["CatUsuFoto"]);
            } else {
                $(".visor").attr("src", "vistas/img/usuarios/defecto.png");
            }
        }
    })
})