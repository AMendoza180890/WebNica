<div class="modal fade" role="dialog" id="ver_media">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Lista de archivos media</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Media:</h2>
                            <table class="table table-bordered table-hover table-striped TB">
                                <thead>
                                    <tr>
                                        <th>N</th>
                                        <th>Descripcion</th>
                                        <th>imagenMuestra</th>
                                        <th>Agregar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $mostrarListaMultimedia = new clsMultimediaC();
                                    $mostrarListaMultimedia->mostrarListaMediaC();
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>