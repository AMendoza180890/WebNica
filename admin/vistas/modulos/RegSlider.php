<!--Crear modal-->
<div class="modal fade" role="dialog" id="CrearSlider">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" role="form" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
                    <h3>Crear Slider</h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">
                            <h2>Titular:</h2>
                            <input type="text" class="form-control input-lg" name="titularN" require>
                        </div>

                        <div class="form-group">
                            <h2>Descripcion:</h2>
                            <textarea class="" id="" cols="30" rows="10" name="descripcionN"></textarea>
                        </div>

                        <div class="form-group">
                            <h2>Orden:</h2>
                            <input type="text" class="form-control input-lg" name="ordenN">
                        </div>

                        <div class="form-group">
                            <h2>Imagen:</h2>
                            <input type="file" name="imagenN">
                            <p class="help-block">peso maximo permitido 200 MB</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                <?php
                    $crearS = new SlideC();
                    $crearS -> CrearSlideC();
                ?>
            </form>
        </div>
    </div>
</div>
<?php include 'vistas/modulos/ActualizarSlider.php';?>