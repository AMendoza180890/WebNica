<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Entrada de Blog
        </h1>
    </section>
    <!--Actualizar entrada del blog-->
    <form method="post" role="form" enctype="multipart/form-data" id="editarEntrada">
        <div class="modal-header">
            <h3>Editar Entrada</h3>
        </div>
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group">
                    <h2>Titulo:</h2>
                    <input type="text" class="form-control input-lg" id="catBlogTituloE" name="catBlogTituloE">
                    <input type="hidden" name="catBlogCodE" id="catBlogCodE">
                </div>

                <div class="form-group">
                    <h2>Descripcion:</h2>
                    <textarea id="catBlogDescripcionE" name="catBlogDescripcionE" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <h2>Orden:</h2>
                    <input type="text" class="orm-control input-lg" id="catBlogOrdenE" name="catBlogOrdenE" require>
                </div>

                <div class="form-group">
                    <h2>imagen:</h2>
                    <input type="file" id="catBlogImgE" name="catBlogImgE" require>
                    <p class="help-block">peso máximo permitido 200 MB</p>
                    <img src="vistas/img/usuarios/default.png" class="img-thumbnail visor" width="200px;" alt="Imagen a mostrar">
                    <input type="hidden" name="catBlogCurrentImgE" id="catBlogCurrentImgE">
                </div>

            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="submit" class="btn btn-secondary" data-toggle="modal" data-target="#ver_media">Add Multimedia</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </div>
<?php
$actualizarEntrada = new classBlogC();
$actualizarEntrada->actualizarEntradaBlogC();
?>
</form>

 <?php include 'vistas/modulos/loadMedia.php'; ?>