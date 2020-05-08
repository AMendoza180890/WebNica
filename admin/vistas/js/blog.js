$(".eliminarEntrada").on("click", function() {
    var codCln = $(this).attr("blgidCln");
    window.location = "index.php?ruta=Blog&codDl=" + codCln;
})