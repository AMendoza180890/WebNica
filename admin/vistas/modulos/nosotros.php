<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Gestor de Nuestros Servicios
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-success">
            <div class="box-body">
                <?php
                    $mostrarEncabezado = new servicioC();
                    $mostrarEncabezado -> MostrarEncServicioC();
                ?>
            </div>
            <div class="box-footer">
                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i>Editar</button>
            </div>
        </div>
    </section>
</div>


<div id="EditarNosotros" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">

                <div class="modal-header">
                    <h3>Editar Nuestros Servicios</h3>
                </div>

                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <h2>Imagen Banner:</h2>
                            <input type="file" name="imagenE">
                            <img src="vistas/img/usuarios/default.png" class="img-thumbnail visor" width="250px">
                        </div>

                        <div class="form-group">
                            <h2>Descripcion</h2>
                            <textarea class="form-control" name="descripcionE" required></textarea>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="submit" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>