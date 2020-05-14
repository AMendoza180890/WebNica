$(".eliminarMedia").on("click", function() {
    if (confirm("Deseas eliminar la imagen")) {
        let imgCodMultimedia = $(this).attr("blgidCln");
        window.location = "index.php?ruta=media&cdel=" + imgCodMultimedia;
    }
})