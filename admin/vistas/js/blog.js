$(".eliminarEntrada").on("click", function() {
    var codCln = $(this).attr("blgidCln");
    window.location = "index.php?ruta=Blog&codDl=" + codCln;
})

$(".TB").on("click", ".actualizarEntrada", function() {
    var updtCod = $(this).attr("updtCod");
    var entradas = new FormData();

    entradas.append("updtCod", updtCod);

    $.ajax({
        url: "Ajax/blogA.php",
        method: "POST",
        data: entradas,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(EntradaBlog) {
            $("#catBlogCodE").val(EntradaBlog["id"]);
            $("#catBlogTituloE").val(decodeURIComponent(escape(EntradaBlog["CatBlogTitulo"])));
            $("#catBlogDescripcionE").val(decodeURIComponent(escape(EntradaBlog["CatBlogDescripcion"])));
            $("#catBlogOrdenE").val(EntradaBlog["Orden"]);
            $(".visor").attr("src", EntradaBlog["CatBlogImg"]);
            $("#catBlogCurrentImgE").val(EntradaBlog["CatBlogImg"]);
        }
    })
})