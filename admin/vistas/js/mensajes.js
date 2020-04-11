    //Borrar mensaje
    $(".TB").on("click", ".btndelmsg", function() {
            var IdBorrar = $(this).attr("idErs");
            window.location = "index.php?ruta=mensajes&id=" + IdBorrar;
        })
        // mostrar correo completo
    $(".TB").on("click", ".btnEditmsg", function() {
        var id_actualizacion_msg = $(this).attr("iduptmsg");
        var frm_actualizacion_msg = new FormData();
        frm_actualizacion_msg.append("iduptmsg", id_actualizacion_msg);

        $.ajax({
            url: "Ajax/mensajesA.php",
            method: "POST",
            data: frm_actualizacion_msg,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(mensaje_obtenido) {
                $("#idE").val(mensaje_obtenido["catclicontid"]);
                $("#nombreE").val(mensaje_obtenido["catclicontName"]);
                $("#emailE").val(mensaje_obtenido["catclicontEmail"]);
                $("#direccionE").val(mensaje_obtenido["catclicontAdress"]);
                $("#descripcionE").val(mensaje_obtenido["catclicontMessage"]);
            }
        })
    })