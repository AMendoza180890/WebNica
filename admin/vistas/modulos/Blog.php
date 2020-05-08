<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gestor de Blog
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#crearEntrada">Crear Nueva Entrada</button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover table-striped TB">
                    <thead>
                        <tr>
                            <th>N</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Descripcion</th>
                            <th>Fecha_Edición</th>
                            <th>Orden</th>
                            <th>Editar / Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $mostrarListaEntrada = new classBlogC();
                        $mostrarListaEntrada->mostrarListaBlogC();

                        $valor = null;
                        classBlogC::mostrarEntradaBlogC($valor);
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
    </section>
</div>

<!--CRUD-->
<!--Modulo de creacion de entrada del blog-->
<div class="modal fade" role="dialog" id="crearEntrada">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Crear Entrada al blog</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <h2>Titulo:</h2>
                            <input type="text" class="form-control input-lg" name="catBlogTituloN" require>
                        </div>

                        <div class="form-group">
                            <h2>Descripcion:</h2>
                            <textarea cols="30" rows="10" name="catBlogDescripcionN" require></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Orden:</h2>
                            <input type="text" class="orm-control input-lg" name="catBlogOrdenN" require>
                        </div>

                        <div class="form-group">
                            <h2>Imagen:</h2>
                            <input type="file" name="catBlogImgN" require>
                            <p class="help-block">peso máximo permitido 200 MB</p>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $insertarEntrada = new classBlogC();
                $insertarEntrada->insertarEntradaBlogC();
                ?>
            </form>
        </div>
    </div>
</div>


<!--Actualizar entrada del blog-->
<div class="modal fade" role="dialog" id="editarEntrada">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </div>
                <?php
                $actualizarEntrada = new classBlogC();
                $actualizarEntrada->actualizarEntradaBlogC();
                ?>
            </form>
        </div>
    </div>
</div>
<?php
$borrarEntrada = new classBlogC();
$borrarEntrada->eliminarEntradaBlogC();
?>