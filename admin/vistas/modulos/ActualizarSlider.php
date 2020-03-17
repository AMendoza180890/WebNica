<div class="modal fade" role="dialog" id="EditarS">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Editar Slider</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titular:</h2>
                            <input type="text" class="form-control input-lg" id="titularE" name="titularE" require>
                            <input type="hidden" id="Sid" name="Sid">
                        </div>
                        <div class="form-group">
                            <h2>Descripcion:</h2>
                            <textarea id="descripcionE" name="descripcionE" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <h2>Orden:</h2>
                            <input type="text" class="form-control input-lg" id="ordenE" name="ordenE" require>
                        </div>
                        <div class="form-group">
                            <h2>Imagen:</h2>
                            <input type="file" name="imagenE" id="imagenE">
                            <p class="help-block">peso maximo permitido 200 MB</p>
                            <img src="vistas/img/usuarios/default.png" class="img-thumbnail visor" width="200px;" alt="">
                            <input type="hidden" name="imagenActual" id="imagenActual">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </div>
            </form>
        </div>
    </div>
</div>