<?php
class servicioC{
    public function MostrarEncServicioC(){
        try {
            $respuesta = servicioM::MostrarEncServiciosM();
            echo '<h1>Imagen Banner:</h1>';
                if ($respuesta["HOSImgBanner"] !== '') {
                    echo '<img src="'.$respuesta["HOSImgBanner"].'" alt="imagen de banner" width="250px">';
                }else{
                    echo '<img src="vistas/img/usuarios/default.png" alt="imagen de banner" width="250px">';
                }
            echo '<hr>
                <h2>Descripcion:</h2>
                <h4>'.utf8_decode($respuesta["HOSDescripcion"]).'</h4>';
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    // Mostrar informacion en el formulario.
    public function EditarEncServicioFrmC()
    {
        try {
            $respuesta = servicioM::MostrarEncServiciosFormM();
            echo '<div class="modal-header">
                    <h3>Editar Nuestros Servicios</h3>
                  </div>

                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <h2>Imagen Banner:</h2>
                            <input type="hidden" name="Nid" value="'.$respuesta["id"].'">
                            <input type="file" name="imagenE">';
            if ($respuesta["HOSImgBanner"] !== '') {
                echo '<img src="'.$respuesta["HOSImgBanner"].'" class="img-thumbnail visor" width="250px">';
            }else {
                echo '<img src="vistas/img/usuarios/default.png" class="img-thumbnail visor" width="250px">';
            }
                echo '<input type="hidden" name="imagenActual" value="'.$respuesta["HOSImgBanner"].'">
                    </div>
                        <div class="form-group">
                            <h2>Descripcion</h2>
                            <textarea class="form-control" name="descripcionE" required>'.utf8_decode($respuesta["HOSDescripcion"]).'</textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="submit" data-dismiss="modal">Cancelar</button>
                </div>';

        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }

    // Actualizar informacion en la base de datos.
    public function EditarEncServicioC(){
        try {
            if (isset($_POST["Nid"])) {
                $ImgFile = $_POST["imagenActual"];
                if (isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])) {
                    if (!empty($_POST["imagenActual"])) {
                        unlink($_POST["imagenActual"]);
                    }else {
                        mkdir("vistas/img/sevicio/encabezado",0775);
                    }
                    $ImgFile = EditImg::imgEditarServicio("imagenE");
                }
                    $datosC = array('imagen' => $ImgFile, 'description' => utf8_encode($_POST["descripcionE"]), 'id' => $_POST["Nid"]);
                    $respuesta = servicioM::EditarEncServicioM($datosC);
                    
                    if ($respuesta) {
                        echo '<script> window.location="nosotros"; </script>';
                    }else {
                        echo 'Ocurrio un error, intentelo más tarde';
                    }
                
            }  
        } catch (exception $ex) {
            mensajes::error($ex);
        }
    }
}
?>