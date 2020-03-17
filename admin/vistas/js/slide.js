$(".TB").on("click", ".EditarSlide", function() {
    var Sid = $(this).Attr("Sid");
    var datos = new FormData();

    datos.append("Sid", Sid);

    $.ajax({
        url: "Ajax/slideA.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            $("#Sid").val(respuesta["id"]);
            $("#imagenActual").val(respuesta["imagen"]);

            if (respuesta["imagen"] != "") {
                $(".visor").Attr("src", respuesta["imagen"]);
            } else {
                $(".visor").Attr("src", "vistas/img/usuarios/default.png");
            }
            $("#titularE").val(respuesta["titular"]);
            $("#descripcionE").val(respuesta["descripcion"]);
            $("#ordenE").val(respuesta["orden"]);
        }
    })
})