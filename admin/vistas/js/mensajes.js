$(".TB").on("click", ".btndelmsg", function() {
    var IdBorrar = $(this).attr("idErs");
    window.location = "index.php?ruta=mensajes&id=" + IdBorrar;
})