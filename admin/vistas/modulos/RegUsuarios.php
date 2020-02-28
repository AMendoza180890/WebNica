<!--Crear modal-->
<div class="modal fade" role="dialog" id="CrearUsuarios">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Crear Usuarios</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Seleccionar el Empleado:</h2>
                            <select name="rolN" class="form-control input-lg">
                                <option>Seleccione Rol...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Editor de Contenido</option>
                                <option value="3">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Nombre de Usuario:</h2>
                            <input type="text" class="form-control input-lg" name="usuarioN" require>
                        </div>
                        <div class="form-group">
                            <h2>Contraseña:</h2>
                            <input type="password" class="form-control input-lg" name="claveN" require>
                        </div>
                        <div class="form-group">
                            <h2>Seleccionar el Rol:</h2>
                            <select name="rolN" class="form-control input-lg">
                                <option>Seleccione Rol...</option>
                                <option value="1">Administrador</option>
                                <option value="2">Editor de Contenido</option>
                                <option value="3">Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <h2>Foto:</h2>
                            <input type="file" name="fotoN">
                            <p class="help-block">peso maximo permitido 200 MB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                $CUsuarios = new UsuarioCrearC();
                $CUsuarios->CreateUsers();
                ?>
            </form>
        </div>
    </div>
</div>