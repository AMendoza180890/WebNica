// Datos para editar Slide
$(".TB").on("click", ".EditarSlide", function() {
    var Sid = $(this).attr("Sid");
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
                $(".visor").attr("src", respuesta["imagen"]);
            } else {
                $(".visor").attr("src", "vistas/img/usuarios/default.png");
            }
            $("#titularE").val(respuesta["titular"]);
            $("#descripcionE").val(respuesta["descripcion"]);
            $("#urlPagE").val(respuesta["urlPag"]);
            $("#ordenE").val(respuesta["orden"]);
        }
    })
})

//Borrar Slide
$(".TB").on("click",".BorrarSlide", function(){
    var Sid = $(this).attr("Sid");
    var imagenSlide = $(this).attr("imagenSlide");

    window.location = 'index.php?ruta=slide&Sid='+Sid+'$imagenSlide='+imagenSlide;
})