<div class="modal fade" role="dialog" id="EditarU">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Editar Usuario</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Nombre de Usuario:</h2>
                            <input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE" require>
                            <input type="hidden" id="CatUsuId" name="CatUsuId">
                        </div>
                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="password" class="form-control input-lg" id="claveE" name="claveE" require>
                        </div>
                        <div class="form-group">
                            <h2>Seleccionar el Rol:</h2>
                            <select name="rolE" class="form-control input-lg">
                                <option id="rolE"></option>
                                <option value="1">Administrador</option>
                                <option value="2">Editor de Contenido</option>
                                <option value="3">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Foto:</h2>
                            <input type="file" name="fotoE" id="fotoE">
                            <p class="help-block">peso maximo permitido 200 MB</p>
                            <img src="vistas/img/usuarios/defecto.png" class="img-thumbnail visor" width="100px;" alt="">
                            <input type="hidden" name="FotoActual" id="FotoActual">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                </div>
                <?php
                $ActualizarU = new UpdateUserC();
                $ActualizarU -> UpdateUC();
                ?>
            </form>
        </div>
    </div>
</div>