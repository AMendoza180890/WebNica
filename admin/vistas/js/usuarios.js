$(".TB").on("click", ".BorrarU", function() {
    var CatUsuId = $(this).attr("CatUsuId");
    var CatUsuFoto = $(this).attr("CatUsuFoto");
    window.location = "index.php?ruta=usuarios&CatUsuId=" + CatUsuId + "&CatUsuFoto=" + CatUsuFoto;
})